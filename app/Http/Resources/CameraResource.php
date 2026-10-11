<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CameraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
    return [
        'id'              => $this->id,
        'nama'            => $this->nama,
        'merek'           => $this->merek,
        'harga_per_hari'  => $this->harga_per_hari,
        'status'          => $this->status,
        'nama_penyewa'    => $this->nama_penyewa,
        'tanggal_sewa'    => $this->tanggal_sewa,
        'tanggal_kembali' => $this->tanggal_kembali,
    ];
    }
}
