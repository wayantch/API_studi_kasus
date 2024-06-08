<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|max:100|string',
            'author' => 'required|max:100|string',
            'publication_add' => 'required|max:100|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'category_id' => 'integer'
        ];
    }
}
