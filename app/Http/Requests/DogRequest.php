<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;
// use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\Validator;

class DogRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'breed' => 'required|unique:dogs,breed|string|max:40',
            'life_expectancy' => 'required|integer',
            'height' => 'required|numeric|between:0,99.99',
            // Rule::unique('dogs'),
        ];

        if ($this->method() === 'PATCH') {
            $rules['breed'] = [
                'required',
                'string',
                'max:40',
                Rule::unique('dogs')->ignore($this->id),
            ];

            $rules['life_expectancy'] = [
                'required',
                'integer',
            ];

            $rules['height'] = [
                'required',
                'numeric',
                'between:0,99.99',
            ];
        }

        return $rules;
    }


    public function messages(): array
    {
        return [
            'breed.required' => 'A raça de cães é um campo obrigatório',
            'breed.unique' => 'A raça de cães deve ser única',
            'breed.max' => 'O campo da raça de cães não pode ser superior a 40 caracteres.',
            'life_expectancy.required' => 'A expectativa de vida é um campo obrigatório',
            'life_expectancy.integer' => 'A expectativa de vida deve ser um valor inteiro',
            'height.required' => 'A altura é um campo obrigatório',
            'height.numeric' => 'A altura deve ser um valor decimal',
            'height.between' => 'A altura deve ser um valor entre 0 a 99.99',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => $validator->errors()->first(),
        ], 422));
    }
}