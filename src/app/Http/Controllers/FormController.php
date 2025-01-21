<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function confirm(ContactRequest $request)
    {


        $contact = $request->only(['gender', 'email', 'address', 'building', 'category_id','detail']);

        $contact['name'] = $request->input('last_name'). ' ' . $request->input('first_name');

        $contact['tel'] = $request->input('tel1') . $request->input('tel2') . $request->input('tel3');

        $category = Category::find($contact['category_id']);

        if ($category) {
        $contact['category'] = $category->content;
        }


        return view('confirm', compact('contact'));
    }


    public function store (ContactRequest $request)
    {
        dd($request);

        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
            Contact::create($contact);

        return view('thanks');
    }


    public function admin()
    {
        return view('admin');
    }

}
