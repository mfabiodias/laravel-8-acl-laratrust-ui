<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Models\Permission;

class PermissionController extends Controller
{
    private $context = "Permissão";

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(PermissionRequest $request)
    {
        $data = $request->only(['type', 'name', 'display_name', 'description']);
        $data = Permission::create($data);

        return response()->json([
            'message'   => $this->context.' criada com sucesso',
            'data'      => $data
        ], 201);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(PermissionRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
