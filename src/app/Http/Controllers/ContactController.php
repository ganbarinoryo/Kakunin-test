<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{ 
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['name', 'gender', 'email', 'tell' ,'address', 'building', 'detail', 'content']);
      return view('confirm', compact('contact'));
      return back('index');

  }

  public function store(ContactRequest $request)
  {
    $contact = $request->only(['name', 'gender', 'email', 'tell','address', 'building', 'detail', 'content']);
      Contact::create($contact);
      return view('thanks');
  }

  public function thanks()
  {
    return view('index');
  }

  public function register()
  {
    return view('register');
  }

}
