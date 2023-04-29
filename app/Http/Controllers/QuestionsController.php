<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuestionsRequest;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function updateQuestions(QuestionsRequest $request) {
        $user = Auth::user();
        $user->question1 = $request->input('question1');
        $user->question2 = $request->input('question2');
        $user->question3 = $request->input('question3');
        $user->save();
        return redirect('/viewQuestions')->with('success', 'Profile updated successfully!');
    }
    public function displayQuestions() {
        return view('questions.questions');
    }


}