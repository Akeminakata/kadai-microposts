<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    //
    protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * このユーザがお気に入りの一覧を取得。（ Userモデルとの関係を定義）
     */
    public function favorites_users ()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'micropost_id')->withTimestamps();
    }
}
