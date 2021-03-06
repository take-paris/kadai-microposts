<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MicropostFavoriteController extends Controller
{         
    public function store(Request $request, $micropost)
    {
        \Auth::user()->favorite($micropost);
        return redirect()->back();
    }

    public function destroy($micropost)
    {
        \Auth::user()->unfavorite($micropost);
        return redirect()->back();
    }
}

