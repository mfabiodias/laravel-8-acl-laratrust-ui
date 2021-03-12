<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'type'         => 'required|in:admin,registro,relatorio',
            'name'         => 'required|unique:permissions,name|max:255',
            'display_name' => 'nullable|max:255',
            'description'  => 'nullable|max:255',
            'route'        => 'required|max:255',
        ];
        
        if(parent::method() == 'PUT'){
            unset($rules['type']);
            unset($rules['name']);
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'type.required'    => 'Tipo é obrigatório.',
            'type.in'          => 'Tipo aceita somente os valores (admin, registro e relatorio)',
            'name.required'    => 'Nome é obrigatório.',
            'name.max'         => 'Nome aceita até :max caracteres.',
            'display_name.max' => 'Nome de exibição aceita até :max caracteres.',
            'description.max'  => 'Descrição aceita até :max caracteres.',
            'route.required'   => 'Rota é obrigatório.',
            'route.max'        => 'Rota aceita até :max caracteres.',
        ];
    }
}
