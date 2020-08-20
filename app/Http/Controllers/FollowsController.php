<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
      return $user->name;
    }
}
