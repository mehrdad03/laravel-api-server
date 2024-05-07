<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\JsonResponse;

class UsersController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return new JsonResponse([
            'data' => 'get'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): JsonResponse
    {
        return new JsonResponse([
            'data' => 'post'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        return new JsonResponse([
            'data' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, User $user): JsonResponse
    {
        return new JsonResponse([
            'data' => 'patch'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        return new JsonResponse([
            'data' => 'delete'
        ]);
    }
}
