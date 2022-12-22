<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\project;

class superControl extends Controller
{
    public function view(){
        return view("supervisor.list");
    }

    function updateData(Request $req){
        $member=project::find($req->student_id);

        $member->progress=$req->progress;
        $member->status=$req->status;

        $member->save();

        return redirect('/redirect');
    }

    function listOut(){
        $member=project::paginate(4);
        return view('supervisor.list', ['x' => $member]);
        }
    function showData($yy){
        $member=project::find($yy);
        return view('supervisor.update', ['x' => $member]);
        }
}




