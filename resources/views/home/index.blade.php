@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Welcome, {{Auth::user()->username}}.</h1>
        <form method="post" action="{{ route('questions.update') }}">
        @csrf
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="question1" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="question1">What is your eye color?</label>
            <!--
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
            -->
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="question2" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="question2">What is your pet's name?</label>
        </div>
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="question3" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="question3">What is your hair color?</label>
            <!--
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
-->
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit Answers</button>
</form>
        @endauth


        @guest
        <h1>Welcome, guest.</h1>
        <p class="lead">You're viewing the welcome page. Sign in or create an account to view and
            answer the questions.
        </p>
        @endguest
    </div>
@endsection