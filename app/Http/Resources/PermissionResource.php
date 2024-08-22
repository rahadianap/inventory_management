<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'guard_name' => $this->guard_name,
            'created_at' => (new Carbon($this->created_at))->format('Y-m-d'),
        ];
    }
}
