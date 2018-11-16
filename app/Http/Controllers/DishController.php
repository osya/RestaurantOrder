<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;

class DishController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }

    public function index()
    {
        return Dish::all();
    }

    public function show(Dish $dish)
    {
        return $dish;
    }

    public function store(Request $request)
    {
        $dish = Dish::create($request->all());

        return response()->json($dish, 201);
    }

    public function update(Request $request, Dish $dish)
    {
        $dish->update($request->all());

        return response()->json($dish, 200);
    }

    public function destroy(Dish $dish)
    {
        try {
            $dish->delete();
        } catch (\Exception $e) {
            return response($e)->json(null, 500);
        }

        return response()->json(null, 204);
    }
}
