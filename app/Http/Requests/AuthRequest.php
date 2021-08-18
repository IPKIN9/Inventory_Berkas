<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'username'=>'required',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'Field ini tidak boleh kosong',
        ];
    }    
}
