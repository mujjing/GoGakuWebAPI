<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ListWordCollection extends ResourceCollection
{
    use CommonParameters;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'list_word' => ListWordResource::collection($this->collection),
        ];
    }
}
