<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    public function index(){
        $data = array(
            'messages'=> Message::orderBy('created_at', 'desc')->paginate(5),
            'count' => Message::count(),
        );
        return view('pages.book', $data);
    }
    public function edit($id){
        return view('pages.edit');
    }
    public function create(Request $request){
        $data = $request->all();
        $message = new Message();
        $message->name =!empty($data['name'])? $data['name']: '';
        $message->message =!empty($data['message'])? $data['message']: '';
        $message->email =!empty($data['email'])? $data['email']: '';
        $message->save();

        return redirect('/');
    }
    public function delete($id){
        (new Message())->find($id)->delete();
        return redirect('/');
    }
}
