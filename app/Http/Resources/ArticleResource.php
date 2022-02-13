<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Title'=>$this->Title,
            'Content'=>$this->Content,
            'Category'=>$this->Category,
            'Status'=>$this->Status
        ];
    }
}