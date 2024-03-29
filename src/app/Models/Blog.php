<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $casts = [
        'is_open' => 'boolean',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => '(退会者)',
        ]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->oldest();
    }
    
    public function scopeOnlyOpen($query)
    {
        // マジックプロパティを使いたくないためboolで指定
        return $query->where('is_open',true);
    }
}
