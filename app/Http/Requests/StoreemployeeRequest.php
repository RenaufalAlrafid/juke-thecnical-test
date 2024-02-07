<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreemployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'date_birth' => 'required',
            'phone_number' => 'required|numeric',
            'email' => 'required|email',
            'province' => 'required',
            'city' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'ktp' => 'required',
            'position' => 'required',
            'bank' => 'required',
        ];
    }
}
