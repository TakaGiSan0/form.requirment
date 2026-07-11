<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Monitoring APD</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-gray-100">

<!-- Navbar -->

<nav class="bg-slate-800 shadow">

    <div class="max-w-7xl mx-auto px-8 h-16 flex justify-between items-center">

        <h1 class="text-2xl font-bold text-white">
            Monitoring APD
        </h1>

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button
                class="bg-red-500 hover:bg-red-600 px-5 py-2 rounded-lg text-white">

                Logout

            </button>

        </form>

    </div>

</nav>

<div class="max-w-7xl mx-auto py-8">

    <!-- Statistik -->

    <div class="grid md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white rounded-xl shadow p-6">

            <p class="text-gray-500">
                Total Pengisian
            </p>

            <h2 class="text-4xl font-bold mt-3">

                {{ $total }}

            </h2>

        </div>

        <div class="bg-white rounded-xl shadow p-6">

            <p class="text-gray-500">
                Hari Ini
            </p>

            <h2 class="text-4xl font-bold mt-3">

                {{ $today }}

            </h2>

        </div>

    </div>

    <!-- Filter -->

    <div class="bg-white rounded-xl shadow p-5 mb-6">

        <form method="GET">

            <div class="grid md:grid-cols-4 gap-4">

                <input
                    type="text"
                    name="nama"
                    value="{{ request('nama') }}"
                    placeholder="Cari nama pekerja..."
                    class="border rounded-lg px-4 py-3">

                <input
                    type="date"
                    name="tanggal"
                    value="{{ request('tanggal') }}"
                    class="border rounded-lg px-4 py-3">

                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white rounded-lg">

                    Filter

                </button>

                <a
                    href="{{ route('dashboard') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white rounded-lg flex items-center justify-center">

                    Reset

                </a>

            </div>

        </form>

    </div>

    <!-- Table -->

    <div class="bg-white rounded-xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-800 text-white">

            <tr>

                <th class="py-3">No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Shift</th>
                <th>Helm</th>
                <th>Rompi</th>
                <th>Sarung</th>
                <th>Sepatu</th>
                <th>Masker</th>
                <th>Submit</th>

            </tr>

            </thead>

            <tbody>

            @forelse($submissions as $item)

                <tr class="border-b hover:bg-gray-50">

                    <td class="text-center py-3">
                        {{ $loop->iteration }}
                    </td>

                    <td class="text-center py-3">
                        {{ $item->name }}
                    </td>

                    <td class="text-center py-3">
                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}
                    </td>

                    <td class="text-center py-3">

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">

                            Shift {{ $item->shift }}

                        </span>

                    </td>

                    <td class="text-center">
                        {{ $item->helm_safety ? '✅' : '❌' }}
                    </td>

                    <td class="text-center">
                        {{ $item->rompi_safety ? '✅' : '❌' }}
                    </td>

                    <td class="text-center">
                        {{ $item->sarung_tangan ? '✅' : '❌' }}
                    </td>

                    <td class="text-center">
                        {{ $item->sepatu_safety ? '✅' : '❌' }}
                    </td>

                    <td class="text-center">
                        {{ $item->masker ? '✅' : '❌' }}
                    </td>

                    <td class="text-center py-3">

                        {{ $item->created_at->format('H:i') }}

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="10" class="py-8 text-center text-gray-500">

                        Belum ada data.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $submissions->links() }}

    </div>

</div>

</body>
</html>