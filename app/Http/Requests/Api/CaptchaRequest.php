<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class CaptchaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => 'required|regex:/^1\d{10}$/|unique:users',
        ];
    }
}