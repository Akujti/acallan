<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Role;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('events/events', [
            'events' => Event::all()
        ]);
    }
}
