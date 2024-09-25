<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrodeLivros extends FormRequest
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
    public function rules()
    {
        return [
            'titulo' => 'required|string|max:255', 
            'descricao' => 'nullable|string|max:1000', 
            'ano_publicacao' => 'required|digits:4|integer|between:1500,2024', 
            'email_autor' => 'required|email', 
            'data_adicao' => 'required|date', 
            'categoria' => 'required|string|in:ficcao,nao_ficcao,fantasia,biografia', 
            'disponivel' => 'boolean', 
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O título é obrigatório.',
            'descricao.max' => 'A descrição não pode ter mais de 1000 caracteres.',
            'ano_publicacao.required' => 'O ano de publicação é obrigatório.',
            'ano_publicacao.digits' => 'O ano de publicação deve ter 4 dígitos.',
            'ano_publicacao.integer' => 'O ano de publicação deve ser um número inteiro.',
            'email_autor.email' => 'O email do autor deve ser válido.',
            'data_adicao.required' => 'A data de adição é obrigatória.',
            'data_adicao.date' => 'A data de adição deve ser uma data válida.',
            'categoria.required' => 'A categoria é obrigatória.',
            'categoria.in' => 'A categoria deve ser uma das opções: ficcao, nao_ficcao, fantasia, biografia.',
            'disponivel.boolean' => 'O campo disponível deve ser verdadeiro ou falso.',
        ];
    }
}



    

