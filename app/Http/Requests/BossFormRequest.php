<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BossFormRequest extends FormRequest
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
            'name'=>'required|min:3|max:50',
            'controlnum'=>'required|min:5|max:5',
            'status'=>'required',
            'extension'=>'required|min:4|max:4',
            'area_id'=>'required',
        ];
    }
}
