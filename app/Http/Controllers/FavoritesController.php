<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    
/**
     * ユーザのmicropostのお気に入りにするアクション。
     *
     * @param   $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 micropostをお気に入りにする
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザのmicropostのお気に入りから削除するアクション。
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、  micropostをお気に入りから外す
        \Auth::user()->unfavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
}