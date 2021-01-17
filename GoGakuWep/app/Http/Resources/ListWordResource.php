<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListWordResource extends JsonResource
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
        return [
            'id'        => $this->id,
            'word'      => $this->word,
            'mean'      => $this->mean,
            'image'     => $this->image,
        ];
    }
}
