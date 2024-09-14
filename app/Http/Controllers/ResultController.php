<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return Result::all();
    }

    public function store(Request $request)
    {
        $result = Result::create($request->all());
        return response()->json($result, 201);
    }

    public function show($id)
    {
        $result = Result::findOrFail($id);
        return response()->json($result);
    }

    public function update(Request $request, $id)
    {
        $result = Result::findOrFail($id);
        $result->update($request->all());
        return response()->json($result, 200);
    }

    public function destroy($id)
    {
        Result::destroy($id);
        return response()->json(null, 204);
    }
}
