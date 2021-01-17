<?php

namespace App\Http\Requests\Api;

use App\Repositories\UserRepository;
use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }


    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'post_list.title'          => 'タイトル',
            'post_list.image'          => 'イメージ',
        ];
    }
}
