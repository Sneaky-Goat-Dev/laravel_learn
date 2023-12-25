@extends('layouts.layout')

@section('content')
    <div class="wrapper ticket-details">
        <h1>Ticket by {{ $ticket->createdByUser }}</h1>
        <p class="type">Type - {{ $ticket->type }}</p>
        <p class="message">Message - {{ $ticket->message }}</p>

    </div>

    <a href="/tickets" class="back">Back to All Tickets</a>


@endsection
