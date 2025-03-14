<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'nip' => ['required'],
            'adress' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
