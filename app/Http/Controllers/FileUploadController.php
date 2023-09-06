<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function showForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,pdf|max:2048', 
        ]);

        if ($request->file('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            return "Archivo subido con éxito. Ruta de almacenamiento: " . $filePath;
        }

        return "No se ha seleccionado ningún archivo.";
    }
}