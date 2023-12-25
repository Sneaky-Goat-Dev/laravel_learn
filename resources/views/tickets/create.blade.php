@extends('layouts.layout')

@section('content')
    <div class="wrapper create-ticket">
        <form action="/tickets" method="POST">
            @csrf
            <label for="type">Choose ticket type:</label>
            <select name="type" id="type">
                <option value="support">Support</option>
                <option value="staff">Staff Feedback</option>
                <option value="urgent">Urgent Priority</option>
                <option value="medium">Medium Priority</option>
                <option value="low">Low Priority</option>
            </select>
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="message">Your message:</label>
            <textarea id="message" name="message" rows="4" cols="50">
            </textarea>
            <input type="submit" value="Submit Ticket">
        </form>
    </div>
@endsection
