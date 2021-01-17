<?php

namespace App\Http\Requests\Api;

use Illuminate\Validation\Rule;

class GetRequest extends BaseRequest
{
    public function authorize()
    {
        return parent::authorize();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
