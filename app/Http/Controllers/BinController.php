<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BinController extends Controller
{
    public function updateFillLevel(Request $request)
    {
        $level = $request->input('level');

        // Handle the fill level update as needed
        // For example, you can save it to the database
        // or trigger some other action.

        // For now, let's just log the received level.
        Log::info("Received fill level: $level");

        // You can return a response if needed
        return response()->json(['message' => 'Fill level updated successfully']);
    }
}
