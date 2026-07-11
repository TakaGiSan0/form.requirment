<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pemeriksaan APD Pekerja Bongkar Muat | PortAuthority</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#ff6b00",
                        "outline": "#8e7164",
                        "tertiary-fixed-dim": "#ffb4a8",
                        "primary-fixed": "#ffdbcc",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#d6e3ff",
                        "on-secondary-container": "#315182",
                        "on-primary-container": "#572000",
                        "error-container": "#ffdad6",
                        "background": "#f8f9fb",
                        "primary": "#a04100",
                        "primary-fixed-dim": "#ffb693",
                        "secondary-container": "#a6c5fe",
                        "on-tertiary-fixed": "#410000",
                        "on-tertiary-container": "#6a0001",
                        "tertiary-fixed": "#ffdad5",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f8f9fb",
                        "tertiary-container": "#ff6855",
                        "surface-tint": "#a04100",
                        "on-tertiary-fixed-variant": "#930002",
                        "surface-dim": "#d8dadc",
                        "tertiary": "#bc140d",
                        "surface-container": "#eceef0",
                        "on-surface": "#191c1e",
                        "inverse-on-surface": "#eff1f3",
                        "on-primary-fixed": "#351000",
                        "on-secondary-fixed-variant": "#264778",
                        "on-error": "#ffffff",
                        "outline-variant": "#e2bfb0",
                        "on-secondary-fixed": "#001b3d",
                        "inverse-surface": "#2d3133",
                        "on-primary-fixed-variant": "#7a3000",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#a9c7ff",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#ffb693",
                        "secondary": "#405f91",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#e6e8ea",
                        "on-background": "#191c1e",
                        "surface-variant": "#e0e3e5",
                        "on-surface-variant": "#5a4136",
                        "surface-container-low": "#f2f4f6",
                        "surface": "#f8f9fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "md": "24px",
                        "gutter": "24px",
                        "margin-mobile": "16px",
                        "lg": "40px",
                        "base": "8px",
                        "xl": "64px",
                        "sm": "12px",
                        "margin-desktop": "48px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "label-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "title-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "title-md": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "60px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "500"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .industrial-card {
            border: 1px solid #E4E7EC;
            background: #FFFFFF;
        }

        .status-strip-orange {
            border-left: 4px solid #ff6b00;
        }

        .checkbox-custom:checked {
            background-color: #ff6b00 !important;
            border-color: #ff6b00 !important;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #405f91 !important;
            border-width: 2px !important;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen flex flex-col">
    <!-- TopAppBar -->
    <header class="bg-surface dark:bg-surface-dim text-primary dark:text-primary-fixed-dim docked full-width top-0 border-b border-outline-variant dark:border-outline flat no shadows flex justify-between items-center w-full px-margin-desktop py-base z-50 sticky">
        <div class="flex items-center gap-xl">
            <span class="font-headline-lg text-headline-lg font-bold text-primary dark:text-primary-fixed-dim">PortAuthority</span>
            <nav class="hidden md:flex items-center gap-md">
                <a class="text-primary font-bold border-b-2 border-primary pb-1 font-title-md text-title-md hover:text-primary-container transition-colors" href="#">Inspections</a>
            </nav>
        </div>
        <div class="flex items-center gap-md">
            <span class="hidden md:block font-label-lg text-label-lg text-on-surface-variant">Safety First</span>
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center py-xl px-margin-mobile md:px-0">
        <div class="w-full max-w-2xl industrial-card rounded-lg shadow-sm status-strip-orange overflow-hidden">
            <div class="p-md md:p-lg">
                <!-- Form Header -->
                <div class="mb-lg">
                    @if(session('success'))
                    <div class="mb-5 rounded-lg border border-green-300 bg-green-100 p-4 text-green-800">
                        <div class="flex items-center gap-2">
                            <span>✅</span>
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                    @endif
                    <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Pemeriksaan APD Pekerja</h1>
                    <p class="text-on-surface-variant font-body-md">Logistik &amp; Bongkar Muat Dermaga</p>
                </div>
                <form class="space-y-md"
                    action="{{ route('form.store') }}"
                    method="POST">

                    @csrf
                    <!-- Basic Information Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider" for="nama_pekerja">Nama Pekerja</label>
                            <input class="h-[48px] border-outline-variant rounded-DEFAULT bg-white px-md font-body-md" id="nama_pekerja" name="nama_pekerja" placeholder="Masukkan nama lengkap" required type="text" />
                            @error('nama_pekerja')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-xs">
                            <label class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider" for="tanggal">Tanggal</label>
                            <input class="h-[48px] border-outline-variant rounded-DEFAULT bg-white px-md font-body-md" id="tanggal" name="tanggal" required type="date" />
                            @error('tanggal')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex flex-col gap-sm">
                        <span class="font-label-lg text-label-lg text-on-surface-variant uppercase tracking-wider">Shift Kerja</span>
                        <div class="grid grid-cols-3 gap-sm">
                            <label class="flex items-center justify-center h-[48px] border border-outline-variant rounded-DEFAULT cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-fixed has-[:checked]:border-primary">
                                <input checked="" class="hidden" name="shift" type="radio" value="Shift 1" />
                                <span class="font-label-lg text-label-lg">Shift 1</span>
                            </label>
                            <label class="flex items-center justify-center h-[48px] border border-outline-variant rounded-DEFAULT cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-fixed has-[:checked]:border-primary">
                                <input class="hidden" name="shift" type="radio" value="Shift 2" />
                                <span class="font-label-lg text-label-lg">Shift 2</span>
                            </label>
                            <label class="flex items-center justify-center h-[48px] border border-outline-variant rounded-DEFAULT cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-fixed has-[:checked]:border-primary">
                                <input class="hidden" name="shift" type="radio" value="Shift 3" />
                                <span class="font-label-lg text-label-lg">Shift 3</span>
                            </label>
                        </div>
                    </div>
                    <!-- APD Checklist Section -->
                    <div class="pt-md mt-md border-t border-outline-variant">
                        <h2 class="font-title-md text-title-md text-on-surface mb-md flex items-center gap-base">
                            <span class="material-symbols-outlined text-primary" data-icon="fact_check">fact_check</span>
                            Daftar Perlengkapan Keselamatan
                        </h2>
                        <div class="space-y-sm">
                            <!-- Checklist Items -->
                            <label class="flex items-center gap-md p-sm border border-outline-variant rounded-DEFAULT hover:bg-surface-container-lowest cursor-pointer transition-all active:scale-[0.99]">
                                <input class="checkbox-custom w-6 h-6 rounded-DEFAULT border-2 border-outline text-primary-container focus:ring-0 focus:ring-offset-0 transition-colors" type="checkbox" name="helm_safety" value="1"/>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface">Helm Safety</span>
                                    <span class="text-xs text-on-surface-variant">Proteksi kepala dari benturan &amp; benda jatuh</span>
                                </div>
                                <span class="material-symbols-outlined ml-auto text-on-surface-variant opacity-20" data-icon="hard_hat">child_hat</span>
                            </label>
                            <label class="flex items-center gap-md p-sm border border-outline-variant rounded-DEFAULT hover:bg-surface-container-lowest cursor-pointer transition-all active:scale-[0.99]">
                                <input class="checkbox-custom w-6 h-6 rounded-DEFAULT border-2 border-outline text-primary-container focus:ring-0 focus:ring-offset-0 transition-colors" type="checkbox" name="rompi_safety" value="1"/>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface">Rompi Safety (High-visibility)</span>
                                    <span class="text-xs text-on-surface-variant">Visibilitas tinggi untuk area operasional</span>
                                </div>
                                <span class="material-symbols-outlined ml-auto text-on-surface-variant opacity-20" data-icon="visibility">visibility</span>
                            </label>
                            <label class="flex items-center gap-md p-sm border border-outline-variant rounded-DEFAULT hover:bg-surface-container-lowest cursor-pointer transition-all active:scale-[0.99]">
                                <input class="checkbox-custom w-6 h-6 rounded-DEFAULT border-2 border-outline text-primary-container focus:ring-0 focus:ring-offset-0 transition-colors" type="checkbox" name="sarung_tangan" value="1"/>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface">Sarung Tangan Kerja</span>
                                    <span class="text-xs text-on-surface-variant">Proteksi tangan saat menangani beban muatan</span>
                                </div>
                                <span class="material-symbols-outlined ml-auto text-on-surface-variant opacity-20" data-icon="front_hand">front_hand</span>
                            </label>
                            <label class="flex items-center gap-md p-sm border border-outline-variant rounded-DEFAULT hover:bg-surface-container-lowest cursor-pointer transition-all active:scale-[0.99]">
                                <input class="checkbox-custom w-6 h-6 rounded-DEFAULT border-2 border-outline text-primary-container focus:ring-0 focus:ring-offset-0 transition-colors" type="checkbox" name="sepatu_safety" value="1"/>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface">Sepatu Safety (Steel toe)</span>
                                    <span class="text-xs text-on-surface-variant">Alas kaki khusus dengan pelindung jari baja</span>
                                </div>
                                <span class="material-symbols-outlined ml-auto text-on-surface-variant opacity-20" data-icon="step_into_out">step_into</span>
                            </label>
                            <label class="flex items-center gap-md p-sm border border-outline-variant rounded-DEFAULT hover:bg-surface-container-lowest cursor-pointer transition-all active:scale-[0.99]">
                                <input class="checkbox-custom w-6 h-6 rounded-DEFAULT border-2 border-outline text-primary-container focus:ring-0 focus:ring-offset-0 transition-colors" type="checkbox" name="masker" value="1"/>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface">Masker</span>
                                    <span class="text-xs text-on-surface-variant">Proteksi pernapasan dari debu operasional</span>
                                </div>
                                <span class="material-symbols-outlined ml-auto text-on-surface-variant opacity-20" data-icon="mask">masks</span>
                            </label>
                        </div>
                    </div>
                    <!-- Footer Action -->
                    <div class="pt-lg flex flex-col gap-md">
                        <button class="w-full h-[56px] bg-primary-container text-white font-bold font-title-md text-title-md rounded-lg shadow-sm hover:brightness-110 active:scale-[0.98] transition-all flex items-center justify-center gap-sm" type="submit">
                            <span class="material-symbols-outlined" data-icon="send">send</span>
                            Submit Pemeriksaan
                        </button>
                        <p class="text-center font-label-sm text-label-sm text-on-surface-variant italic">
                            "Pastikan semua APD dalam kondisi baik sebelum memulai pekerjaan."
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-surface-container-highest dark:bg-inverse-surface text-on-surface dark:text-inverse-on-surface full-width bottom-0 border-t border-outline-variant flat no shadows flex flex-col md:flex-row justify-between items-center px-margin-desktop py-lg w-full">
        <div class="flex flex-col gap-xs items-center md:items-start mb-md md:mb-0">
            <span class="font-label-lg text-label-lg font-black uppercase tracking-widest text-primary">PortAuthority</span>
            <p class="font-label-sm text-label-sm opacity-70">© 2024 Port Authority Safety Division. All rights reserved.</p>
        </div>
        <div class="flex flex-wrap justify-center gap-md md:gap-xl">
        </div>
    </footer>
    <script>

        // Set default date to today
        document.getElementById('tanggal').valueAsDate = new Date();
    </script>
</body>

</html>