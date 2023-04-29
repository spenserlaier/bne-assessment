<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Contracts\Validation\Factory as ValidationFactory;
use Illuminate\Support\Facades\Auth;



class QuestionsRequest extends FormRequest
{
    public function authorize() : bool{
        //return true;
        return Auth::check();
    }
    public function rules(): array
    {
        return [
           'question1' => '',
           'question2' => '', 
            'question3' => '',
        ];
    }
}