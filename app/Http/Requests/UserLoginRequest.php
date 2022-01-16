<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|exists:users,email',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'title must be a exists.',
            'email.required' => 'title must be a required.',
            'password.min'  => 'password must be required'
        ];
    }
}