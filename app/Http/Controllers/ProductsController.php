<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

/**
 * @group Front page
 * APIs for front page
 */

class ProductsController extends Controller
{

    /**
 * @OA\Get(
 *     path="/api/v1/products",
 *     tags={"ProductsController"},
 *     summary="Returns pet inventories by status",
 *     description="Returns a map of status codes to quantities",
 *     operationId="getInventory",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *         @OA\JsonContent(
 *             @OA\AdditionalProperties(
 *                 type="integer",
 *                 format="int32"
 *             )
 *         )
 *     )
 * )
 */

    public function showAll()
    {
        return response()->json(Products::all());
    }

    public function show($id)
    {
        return response()->json(Products::find($id));

    }

    public function save(Request $request)
    {
        $product = Products::create($request->all());
        return response()->json($product);
    }

    public function update(Request $request,$id)
    {
        $product =Products::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);


    }

    public function delete($id)
    {
        $product =Products::findOrFail($id)->delete();
        return response()->json("deleted");
    }


}
