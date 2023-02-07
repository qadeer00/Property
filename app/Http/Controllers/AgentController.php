<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
class AgentController extends Controller
{
    //
    public function addAgent(request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $add_agent=new Agent;
        $add_agent->name=$request['name'];
        $add_agent->email=$request['email'];
        $add_agent->password=$request['password'];
        $add_agent->save();
        return redirect('agent/register')->$request->session()->put('insert','New Agent Added Successfully');


    }
}
