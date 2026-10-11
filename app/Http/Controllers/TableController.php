<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('admin.table.index', compact('tables'));
    }

    public function create()
    {
        return view('admin.table.create');
    }

    public function store(Request $request)
    {
        $validatedReq =  $request->validate([
            'nomor_meja' => 'required',
            'okupasi' => 'required',
            'tipe' => 'required',
        ]);

        Table::create($validatedReq);

        return redirect()->route('admin.table.index')->with('success', 'Meja berhasil ditambahkan');
    }

    public function edit($id)
    {
        $table = Table::find($id);
        return view('admin.table.edit', compact('table'));
    }

    public function update(Request $request, $id)
    {
        $validatedReq =  $request->validate([
            'nomor_meja' => 'required',
            'okupasi' => 'required',
            'tipe' => 'required',
        ]);

        $table = Table::find($id);
        $table->update($validatedReq);
        return redirect()->route('admin.table.index')->with('success', 'Meja berhasil diubah');
    }

    public function destroy($id)
    {
        $table = Table::find($id);
        $table->delete();
        return redirect()->route('admin.table.index')->with('success', 'Meja berhasil dihapus');
    }
}
