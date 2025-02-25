<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
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
            'title' => 'required|unique:products,title|regex:/^[a-zA-Z0-9 ]+$/',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:1',
            'order' => 'nullable|integer|min:0',
            'category_id' => 'required|exists:categories,id',

        ];
    }
    public function messages(){
        return [
            'title.required'=>"Please Enter Product Name",
            'title.unique'=>"Duplicate Product",
            'price.required'=>"Price Not Defined",
            'price.numeric'=>"Not Accepted",
            'quantity.required'=>"Please Enter Quantity",
            'order.required'=>"Please Enter Order No",
            'order.integer'=>"Please Enter in no",
            'category_id.required'=>"Category not selected",


        ];
    }
}
