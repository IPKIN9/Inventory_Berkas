<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>'required|min:5|max:20',
            'username'=>'required|unique:users,username|min:5|max:20',
            'password'=>'required|confirmed|min:5|max:15'
        ];
    }
    public function messages()
    {
        return[
            'required'=>'Field ini tidak boleh kosong',
            'name.min'=>'Nama terlalu pendek',
            'unique'=>'Username sudah digunakan',
            'username.min'=>'Username terlalu pendek',
            'username.max'=>'Username terlalu panjang',
            'confirmed'=>'Konfirmasi Password tidak sama '
        ];
    }
}
