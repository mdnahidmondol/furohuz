<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

use function Termwind\render;

class TypeController extends Controller
{
    public function typeList()
    {
        $types = Type::all();
        return Inertia::render("Dashboard/Type/Index", [
            "types" => $types,
        ]);

        return Inertia::render("Dashboard/Type/Index");
    }
    public function typeCreate()
    {
        return Inertia::render("Dashboard/Type/Create");
    }

    public function storeType(Request $request)
    {
        $path = uploadS3($request->image);

        $type = Type::create([
            "title" => $request->title,
            "slug" => "",
            "description" => $request->title,
            "image" => $path,
            "status" => "1",
        ]);
        return redirect("/type-list");
    }
}
