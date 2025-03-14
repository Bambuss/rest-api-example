<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required'], 'string',
            'email' => ['required', 'max:254', 'email:rfc,dns'],
            'phone' => ['sometimes', 'nullable'],
            'company_id' => ['required', 'exists:companies,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
