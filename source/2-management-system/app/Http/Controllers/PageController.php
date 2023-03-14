<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PageController extends Controller
{
    public function ViewIndexPageFunction(){

        return view('index'); 

    }

    public function ViewHomePageFunction(){
        
        $login_access_session = Session::get('LoginAccess');

        if($login_access_session == '[TRUE]'){

            return view('home-page',['PageName' => 'Home Page']); 
            
        }else{

            return redirect()->route('IndexPageLink');
            
        }
        
    }


    public function ViewVisionDataFunction(){
        
        $login_access_session = Session::get('LoginAccess');

        if($login_access_session == '[TRUE]'){

            return view('vision-data',['PageName' => 'Vision Data']); 
            
        }else{

            return redirect()->route('IndexPageLink');
            
        }
        
    }

    public function ViewAudioDataFunction(){
        
        $login_access_session = Session::get('LoginAccess');

        if($login_access_session == '[TRUE]'){

            return view('audio-data',['PageName' => 'Audio Data']); 
            
        }else{

            return redirect()->route('IndexPageLink');
            
        }
        
    }

    public function ViewSettingsFunction(){
        
        $login_access_session = Session::get('LoginAccess');

        if($login_access_session == '[TRUE]'){

            return view('settings',['PageName' => 'Settings']); 
            
        }else{

            return redirect()->route('IndexPageLink');
            
        }
        
    }
}