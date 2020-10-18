<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    public function show()
    {
        $clients = Client::all();
        return view('admin.cliente.show', compact('clients'));
    }

    public function formRegister()
    {
        return view('admin.cliente.register');
    }

    public function register(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return redirect()->to('/admin/client');
    }

    public function formEdit($id)
    {
        $client = Client::find($id);
        if (!$client) {
            abort(404);
        }
        return view('admin.cliente.edit', compact('client'));
    }

    public function edit(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            abort(404);
        }
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return redirect()->to('/admin/client');
    }

    public function delete(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            abort(404);
        }
        $client->delete();
        return redirect()->to('/admin/client');
    }
}
