<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Carbon\Carbon;

class TicketController extends Controller
{
    public function index(){
        $tickets = Ticket::orderBy('type', 'desc')->get();

        // print($tickets);

        $name = request('name');

        return view('tickets.index', ['tickets' => $tickets, 'name' => $name]);
    }

    public function show($id){
        $ticket = Ticket::findOrFail($id);

        return view('tickets.show', ['ticket' => $ticket]);
    }

    public function create(){
        return view('tickets.create');
    }

    public function store(){
        $ticket = new Ticket();
        $ticket->type = request('type');
        $ticket->createdByUser = request('name');
        $ticket->message = request('message');
        $ticket->createdDate = Carbon::now()->toDateTimeString();

        $ticket->save();


        return redirect('/')->with('message', 'Thanks for submitting a ticket!');
    }
}
