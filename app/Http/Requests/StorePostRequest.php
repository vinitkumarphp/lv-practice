<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use App\Rules\Lowercase;
class StorePostRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        //dd($this->request->all());
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','unique:posts',new Lowercase],
            'description'=>'required',
            'slug'=>'required'

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A name is required.',
            'name.lowercase'=>trans('validation.uppercase')
        ];
    }
}
