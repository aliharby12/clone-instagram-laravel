<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
      return view('profiles.index', compact('user'));
    }


    public function edit(User $user)
    {
      $this->authorize('update', $user->profile);

      return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
      $this->authorize('update', $user->profile);

      $data = request()->validate([
        'title' => '',
        'description' => '',
        'url' => '',

      ]);

      if (request('image')) {
        $imagePath = request('image')->store('profiles', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(100,1000);
        $image->save();
      }


      auth()->user()->profile->update(array_merge(
        $data,
        ['image' => $imagePath]
      ));

      return redirect("/profiles/{$user->id}");
    }
}
