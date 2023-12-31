<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableStoreRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
public function create(){
    return view('admin.tables.create');
}
public function index()
{
    $tables = Table::all();
    return view('admin.tables.index', compact('tables'));
}
public function store(TableStoreRequest $request)
{
    Table::create([
        'name' => $request->name,
        'guest_number' => $request->guest_number,
        'status' => $request->status,
        'location' => $request->location,
    ]);

    return to_route('tables.index')->with('success', 'Table created successfully.');
}
}
