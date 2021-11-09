<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

// use App\Http\Controllers\PerformanceDataController;

class PerformanceDataResource extends JsonResource // this class was named by artisan as PerformanceData and that will work too. I renamed it.
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request); //this was created by the php artisan make:resource PerformanceData command
        return [
            'id' => $this->id,
            'application_load' => $this->application_load,
            'response_time' => $this->response_time,
            'transaction_rate' => $this->transaction_rate,
            'received_at' => $this->received_at,
            'sender_ip' => $this->sender_ip,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
        ];
    }
}
