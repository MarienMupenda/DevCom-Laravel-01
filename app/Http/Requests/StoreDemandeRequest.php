<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreDemandeRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|min:3',
            'matricule' => 'required|integer',
            'promotion' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est obligatoire',
            'nom.min' => 'Le nom doit avoir au moins 3 caractères',
            'matricule.required' => 'Le matricule est obligatoire',
            'matricule.integer' => 'Le matricule doit être un nombre',
            'promotion.required' => 'La promotion est obligatoire'
        ];
    }
}
