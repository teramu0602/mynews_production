<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\History;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);

        $profile = new Profile;
        $form = $request->all();


        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $profile->fill($form);
        $profile->save();

        return redirect('admin/profile/create');
    }

    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        if(empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit',['profile_form' => $profile]);
 
        
    }

    public function update(Request $request)
    {
        $this->validate($request,Profile::$rules);
        $profile = Profile::find($request->id);
        $profile_form = $request->all();

        $profile->fill($profile_form)->save();

        $history = new History();
        $history->profile_id = $profile->id;
        $history->edited_at = carbon::now('Asia/Tokyo');
        $history->save();

        return redirect('admin/profile/edit');
    }
}
