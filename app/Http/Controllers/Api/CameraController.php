<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreCameraRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CameraResource; 
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $cameras = Camera::all();

    return response()->json([
        'success' => true,
        'message' => 'Daftar kamera berhasil diambil.',
        'data'    => CameraResource::collection($cameras),
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(StoreCameraRequest $request)
{
    $camera = Camera::create($request->validated());

    return response()->json([
        'success' => true,
        'message' => 'Kamera berhasil ditambahkan.',
         'data'    => new CameraResource($camera->fresh()),
        // 'data'    => new CameraResource($camera),
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(Camera $camera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camera $camera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camera $camera)
    {
        //
    }
}
