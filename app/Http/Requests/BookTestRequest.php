<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookTestRequest extends FormRequest
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
            'test_id' => 'required|exists:tests,id',
            'patient_id' => 'required|exists:patients,id',
            'location' => 'required|nullable|string',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i:s',
            'visit_type' => 'required|in:lab,home',
        ];
    }
}
