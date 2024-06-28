<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\V1\UserResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'relationships' => [
                'author' => UserResource::make($this->user),
            ],
            'links' => [
                'self' => route('articles.show', $this->id),
                'related' => route('articles.show', $this->slug),
            ]
        ];
    }

    public function with(Request $request)
    {
        return [
            'status' => 'success',
        ];
    }

    public function withResponse(Request $request, \Illuminate\Http\JsonResponse $response)
    {
        $response->header('Accept', 'application/json');
        $response->header('Version', 'V1');
    }
}
