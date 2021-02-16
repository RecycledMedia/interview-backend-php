<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;


class ApiController extends Controller
{
    public function getAllUsers() {
        $users = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($users, 200);
    }

    public function getUser($id) {
        if (User::where('id', $id)->exists()) {
            $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }

    public function createUser(Request $request) {
        // logic to create user goes here
    }

    public function updateUser(Request $request, $id) {
        // logic to update a student record goes here
    }

    public function deleteUser ($id) {
        // logic to delete a student record goes here
    }

    public function getAllItems(Request $request) {
        $items = Item::get()->toJson(JSON_PRETTY_PRINT);
        return response($items, 200);
    }

    public function getItem($id) {
        if (Item::where('id', $id)->exists()) {
            $item = Item::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($item, 200);
        } else {
            return response()->json([
                "message" => "Item not found"
            ], 404);
        }
    }

    public function createItem(Request $request) {
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->image = $request->image;
        $item->seller_id = 1;

        $item->save();

        return response()->json([
            "message" => "item record created"
        ], 201);
    }

    public function updateItem(Request $request, $id) {
        if (Item::where('id', $id)->exists()) {
            $item = Item::find($id);
            $item->name = is_null($request->name) ? $item->name : $request->name;
            $item->description = is_null($request->description) ? $item->course : $request->description;
            $item->image = is_null($request->image) ? $item->image : $request->image;
            $item->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Item not found"
            ], 404);

        }    }

    public function deleteItem ($id) {
        // logic to delete a student record goes here
    }
}
