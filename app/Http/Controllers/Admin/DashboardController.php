<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormSubmission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = FormSubmission::query();

        if ($request->filled('nama')) {
            $query->where('nama_pekerja', 'like', '%' . $request->nama . '%');
        }

        if ($request->filled('tanggal')) {
            $query->whereDate('tanggal', $request->tanggal);
        }

        $submissions = $query->latest()->paginate(10);

        return view('dashboard', [
            'submissions' => $submissions,
            'total' => FormSubmission::count(),
            'today' => FormSubmission::whereDate('tanggal', today())->count(),
        ]);
    }
}
