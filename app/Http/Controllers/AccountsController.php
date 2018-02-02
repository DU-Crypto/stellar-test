<?php

namespace App\Http\Controllers;

use App\Account;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
     public function index()
    {
    	$accounts = Account::where('user_id',auth()->id())->get();
        return view('accounts.index', compact('accounts'));
    }
         public function store(Request $request)
    { 	
    	
    		
         return  Account::create([
           	'user_id'=>  auth()->id() , 
           	'symbol'=> $request->symbol, 
           	'address'=> $request->address, 
           	'key'=> $request->key,
           	 'balance'=> $request->balance
           ]);
    }
}
