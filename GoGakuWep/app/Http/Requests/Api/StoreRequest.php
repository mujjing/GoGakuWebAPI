<?php

namespace App\Http\Requests\Api\User;

use Illuminate\Validation\Rule;
use App\Consts\UserConst;
use App\Consts\ParentConst;
use App\Consts\ChildConst;

class StoreRequest extends BaseRequest
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

        $rules = [
            'parent.last_name'         => ['required', 'string', 'max:' . ParentConst::LAST_NAME_MAX, 'no_ctrl_chars'],
            'parent.first_name'        => ['required', 'string', 'max:' . ParentConst::FIRST_NAME_MAX, 'no_ctrl_chars'],
            'children.birth_day'       => ['required_if:parent.is_premama,' . ParentConst::IS_PREMAMA_OFF, 'date', 'before:' . now()],
            'children.birth_order'     => ['required_if:parent.is_premama,' . ParentConst::IS_PREMAMA_OFF, 'integer', Rule::in(array_keys(__('select.child.birth_order')))],
            'user.email'               => ['required', 'email', 'min:' . UserConst::EMAIL_MIN, 'max:' . UserConst::EMAIL_MAX, 'bail', $email_unique],
            'user.password'            => ['required', 'string', 'no_ctrl_chars'],
        ];

        return $rules;
    }
}
