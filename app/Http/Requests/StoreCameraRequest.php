<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCameraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
public function rules(): array
{
    return [
        'nama'           => ['required', 'string', 'max:255'],
        'merek'          => ['required', 'string', 'max:255'],
        'harga_per_hari' => ['required', 'integer', 'min:0'],
        'status'          => ['nullable', 'in:tersedia,disewa'],
        'nama_penyewa'    => ['nullable', 'string', 'max:255'],
        'tanggal_sewa'    => ['nullable', 'date'],
        'tanggal_kembali' => ['nullable', 'date', 'after_or_equal:tanggal_sewa'],
    ];
}
}
