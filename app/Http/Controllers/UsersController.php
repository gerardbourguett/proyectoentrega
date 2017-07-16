<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
      $users = User::orderBy('id','ASC')->paginate(5);
      return view('admin.users.index')->with('users',$users);
    }

  /**
  * @return \Illuminate\Http\Response
  */


    public function create()
    {
      return view('admin.users.create');
    }

    /**
    * @return \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function store(Request $request)
    {
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();
      dd('Usuario Creado');
    }

    /**
    * @return int $id
    * @return \Illuminate\Http\Response
    */

    public function show($id)
    {

    }

    /**
    * @return int $id
    * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {

    }

    /**
    * @return \Illuminate\Http\Request $request
    * @return int $id
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request,$id)
    {

    }

    /**
    * @return int $id
    * @return \Illuminate\Http\Response
    */

    public function destroy()
    {

    }
}
