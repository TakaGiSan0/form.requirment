<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    /**
     * Menampilkan halaman form.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Menyimpan data form.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pekerja' => 'required|max:100',
            'tanggal'      => 'required|date',
            'shift'        => 'required',
        ]);

        FormSubmission::create([
            'name'          => $validated['nama_pekerja'],
            'tanggal'       => $validated['tanggal'],
            'shift'         => $validated['shift'],
            'helm_safety'   => $request->boolean('helm_safety'),
            'rompi_safety'  => $request->boolean('rompi_safety'),
            'sarung_tangan' => $request->boolean('sarung_tangan'),
            'sepatu_safety' => $request->boolean('sepatu_safety'),
            'masker'        => $request->boolean('masker'),
        ]);

        return redirect()
            ->route('form.index')
            ->with(
                'success',
                'Form berhasil dikirim. Terima kasih telah melakukan pemeriksaan APD.'
            );
    }
}
