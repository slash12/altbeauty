<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\user;
use DB;
use Illuminate\Support\Facades\Input;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users= user::paginate(2);
        $users = DB::table('users')->get();
        return view('users.index')->with('users',$users);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/users');
    }


    public function show($id)
    {
        $user = user::find($id);
       return view('users.show')->with('users', $user);
    }

    public function showed($id)
    {
        $user = user::find($id);
       return view('users.edit')->with('users', $user);
    }

    public function update(Request $request)
    {
        $id = Input::get('user');

       $email = Input::get('email');
        
        DB::table('users')
            ->where('id', $id)
        ->update(['email' => $email]);
            
      

    $lname = Input::get('lastname');
        DB::table('users')
        ->where('id', $id)
    ->update(['lastname' => $lname]);

    $contactnum = Input::get('contactnum');
    DB::table('users')
    ->where('id', $id)
->update(['contactnum' => $contactnum]);


        return back();

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function logout()
     {
        Auth::logout();
        return redirect('/register');
     }
   
     public function destroy(Request $request)
    {
        
        $user = user::findOrFail($request->userid);
        $user->delete();
       return back();
        //return redirect('/users');
    }
}