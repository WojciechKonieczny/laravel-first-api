<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller {
    public function index() {
        return Player::all();
    }

    public function show($id) {
        $player = Player::find($id);
        return response()->json($player, 200);
    }

    public function store(Request $request) {
        $player = Player::create($request->all());
        return response()->json($player, 201);
    }

    public function update(Request $request, $id) {
        $player = Player::findOrFail($id);
        $player->update($request->all());

        return response()->json($player, 200);
    }

    public function delete(Request $request, $id) {
        $player = Player::findOrFail($id);
        $player->delete();

        return response()->json(null, 204);
    }
}
