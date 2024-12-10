<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function confirm(TestRequest $request)
    {
        $contact = $request->only(['gender', 'email', 'address', 'building', 'content', 'detail']);

        $contact['name'] = $request->input('last_name'). ' ' . $request->input('first_name');

        $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');



        return view('confirm', compact('contact'));
    }


    public function store (TestRequest $request)
    {
         $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);

         Contact::create($contact);


         $category = [
            'content' => $request->input('content')
         ];

         $category = Category::create($category);

         $contact->category_id = $category->id;
         $contact->save();



         return view('tanks');
    }



}
