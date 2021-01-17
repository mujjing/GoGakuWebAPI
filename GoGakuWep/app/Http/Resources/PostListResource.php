<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostListResource extends JsonResource
{
    use CommonParameters;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $list = [
            'id'            => $this->id,
            'title'         => $this->title,
            'image'         => $this->image,
        ];
        return array_merge($list, (new ListWordCollection($this->list_word))->toArray($request));
    }
}
