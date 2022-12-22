<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class adminControl extends Controller
{
    public function user(){
        return view("admin.users");
    }
    function addData(Request $req){
        $member=new project;
        $member->student_id = $req->student_id;
        $member->name = $req->name;
        $member->title = $req->title;
        $member->supervisor_id = $req->supervisor_id;
        $member->ex1 = $req->ex1;
        $member->ex2 = $req->ex2;
        $member->start_date = $req->start_date;
        $member->end_date = $req->end_date;
        $member->progress = $req->progress;
        $member->status = $req->status;
        $member->save();
        return redirect('/redirect');
        }

    function listOut(){
        $member=project::paginate(4);
        return view('admin.users', ['x' => $member]);
        }

}

