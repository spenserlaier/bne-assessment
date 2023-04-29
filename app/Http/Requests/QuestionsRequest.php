<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//use Illuminate\Contracts\Validation\Factory as ValidationFactory;


class QuestionsRequest extends FormRequest
{
    public function authorize() : bool{
        //return true;
        return auth::check();
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