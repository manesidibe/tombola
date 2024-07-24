@extends('layouts.app')

@section('content')
    <div class="create-campaign-container">
        <h1>Create Campaign</h1>

        <form id="campaign-form" method="POST" action="{{ route('campaigns.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br>
            <label for="start-date">Start Date:</label>
            <input type="date" id="start-date" name="start_date" required><br>
            <label for="end-date">End Date:</label>
            <input type="date" id="end-date" name="end_date" required><br>
            <button type="submit">Create Campaign</button>
        </form>
    </div>
@endsection
