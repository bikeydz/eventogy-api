<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class ContactsController extends Controller
{
    public function list()
    {
        $response = Http::get('https://demomedia.co.uk/files/contacts.json')->json();

        return view('contacts', ['data' => $response]);
    }
}
