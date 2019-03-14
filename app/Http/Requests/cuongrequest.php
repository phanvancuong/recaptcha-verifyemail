<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cuongrequest extends FormRequest
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
            'txtMonHoc'=>'required|unique:hehehes,name',
            'txtgiatien'=>'required',
            'fImages'=>'required|image:|max:150'

            
        ];
    }
    public function messages(){
        return [
            'txtMonHoc.required'=>'vui long nhap ten',
            'txtgiatien.required'=>'vui long nhap gia tien',
            'txtMonHoc.unique'=>'ten da ton tai roi nhoc...!',
        ];
    }
}
