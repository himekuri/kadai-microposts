<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 micropost_idの投稿をお気に入り登録する
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿をお気に入り解除するアクション。
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り解除する
        \Auth::user()->unfavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
