<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGuestbookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'feedback'=>['required','string']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле имя обязательно для заполнения',
            'feedback.required' => 'Поле отзыв обязательно для заполнения',

        ];
    }
}
