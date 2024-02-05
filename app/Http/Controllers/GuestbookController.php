<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGuestbookRequest;
use App\Models\Guestbook;

class GuestbookController extends Controller
{
    public function index()
    {
       $posts=Guestbook::orderBy('id', 'DESC')->get();
        return view('guestbook',['posts'=>$posts]);
    }

    public function create(CreateGuestbookRequest $request)
    {
    Guestbook::create([
            'name' => $request->input('name'),
            'feedback' => $request->input('feedback'),
                    ]);
        return redirect()->back();
    }
}
