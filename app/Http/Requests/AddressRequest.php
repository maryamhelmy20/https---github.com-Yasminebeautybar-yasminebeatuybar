<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'address'  => 'required|max:255',
            'phone'    => 'required|numeric',
            'country_id'   => 'required',
            'state_id'          => 'required',
            'city_id' => 'required',
        ];
    }

    /**
     * Get the validation messages of rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'             => 'Product name is required',
            'phone.required'      => 'phone is required',
            'country_id.required'             => 'country  is required',
            'state_id.required'      => 'state is required',
            'city_id.required'             => 'city name is required',


        ];
    }
}
