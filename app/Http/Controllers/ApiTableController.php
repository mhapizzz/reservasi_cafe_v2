<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class ApiTableController extends Controller
{
    public function __construct(Request $request)
    {
        $this->checkApiKey($request);
    }

    public function checkApiKey(Request $request)
    {
        $keyApp = env('API_KEY');
        $keyDariPostman = $request->header('API_KEY');
        if ($keyDariPostman !== $keyApp) {
            throw new HttpResponseException(
                response()->json(['message' => 'Invalid API key.'], 401)
            );
        }
    }
    public function index(Request $request)
    {
        $tables = Table::all();
        return response()->json($tables);
    }

    public function store(Request $request)
    {
        $validatedReq = $request->validate([
            'nomor_meja' => 'required',
            'okupasi' => 'required',
            'tipe' => 'required',
        ]);

        Table::create($validatedReq);

        return response()->json(
            [
                'message' => 'Meja berhasil ditambahkan',
            ],
            200
        );
    }

    public function detail(Request $request, $id)
    {
        $table = Table::find($id);

        return response()->json($table);
    }

    public function update(Request $request, $id)
    {
        $validatedReq = $request->validate([
            'nomor_meja' => 'required',
            'okupasi' => 'required',
            'tipe' => 'required',
        ]);

        $table = Table::find($id);
        $table->update($validatedReq);
        return response()->json(
            [
                'message' => 'Meja berhasil diubah',
            ],
            200
        );
    }

    public function destroy(Request $request, $id)
    {
        $table = Table::find($id);
        $table->delete();
        return response()->json(
            [
                'message' => 'Meja berhasil dihapus',
            ],
            200
        );
    }
}
