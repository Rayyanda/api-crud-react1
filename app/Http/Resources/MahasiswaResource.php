<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MahasiswaResource extends JsonResource
{
    //define  custom response structure
    public $status;
    public $message;
    public $resource;

    /**
     * __construct
     * 
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     */

    public  function __construct($status, $message, $resource) {
        $this->status = $status;
        $this->message= $message;
        $this->resource = $resource;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'success' => $this->status,
            'messages' => $this->message,
            'data'  => $this->resource
        ];
    }
}