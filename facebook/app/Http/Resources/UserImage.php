<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserImage extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'types' => 'user-images',
                'user_image_id' => $this->id,
                'attributes' => [
                    'path' => url($this->path),
                    'width' => $this->width,
                    'height' => $this->height,
                    'location' => $this->location,
                ]
            ],
            'links' => [
                'self' => url('/users/' . $this->id),
            ]
        ];
    }
}