<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Validator;
use App\Contact;

class ContactController extends Controller
{
	public function index(){
$contacts=Contact::paginate(6);
		return view('welcome',compact('contacts')) ;
	}
   
   public function addContact(Request $request){

		
	$validator= Validator::make ($request->all(),[

			'name'=>'required',
			'gender'=>'required',
			'phone'=>'required',
		]);
if($validator->fails()){
			return  Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
			
	}
	else{

		$contact= new Contact;
		 
		$contact->name=$request->name;
	    $contact->gender=$request->gender;
	    $contact->phone=$request->phone;
	  

	    $contact->save();

	    
	   return response()->json( $contact);
	}

   	
   }

   public function editContact(){

		
	}
	 public function deleteContact(){

		
	}
   
}
