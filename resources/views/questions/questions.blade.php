
@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1> {{Auth::user()->username}}'s Responses</h1>
        
        <ul class="list-group">
              <li class="list-group-item "> <h2>Eye Color: {{Auth::user()->question1}}</h2> </li>
              <li class="list-group-item"> <h2> Pet Name: {{Auth::user()->question2}}</h2> </li>
              <li class="list-group-item"> <h2> Hair Color: {{Auth::user()->question3}}</h2> </li>
        </ul>
</div> 
        @endauth


        @guest
        <h1>Your Responses to the Questions</h1>
        <p class="lead">You're viewing the Question Responses page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection