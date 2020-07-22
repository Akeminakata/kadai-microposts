<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //

/**
     * ユーザのmicropostのお気に入りにするアクション。
     *
     * @param   $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 micropostをお気に入りにする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザのmicropostのお気に入りから削除するアクション。
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、  micropostをお気に入りから外す
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
}