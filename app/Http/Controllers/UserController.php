<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
   public function index(){
      $users = User::query()->get();
      return response()->json([
        'status' => true,
        'message' => 'List Users',
        'users' => $users
      ]);
   }
}
