@extends('layouts.layout')

@section('content')
    <div class="title m-b-md">
        Ticket List
    </div>

    {{-- @for ($i = 0; $i < count($tickets); $i++)
        <p>{{ $tickets[$i]['type'] }} ticket {{ $tickets[$i]['ticketno'] }}: {{ $tickets[$i]['message'] }}</p>
    @endfor --}}
    @if ($name)
        <h2>Welcome, {{ $name }}</h2>
    @endif

    @foreach ($tickets as $ticket)
        @if ($loop->first)
            <p>Tickets:</p>
        @endif
        @if ($ticket['type'] == 'urgent')
            <p>URGENT TICKETS MUST BE PRIORITISED!</p>
        @endif

        <p>{{ $ticket['type'] }} ticket {{ $ticket['ticketno'] }}: {{ $ticket['message'] }}</p>

    @endforeach
@endsection
