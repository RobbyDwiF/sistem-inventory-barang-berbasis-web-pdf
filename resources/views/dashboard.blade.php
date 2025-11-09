<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Menu Utama</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <a href="{{ route('barangs.index') }}" class="block p-4 bg-blue-500 hover:bg-blue-700 text-white rounded-lg text-center">
                            <div class="text-2xl mb-2">📦</div>
                            <div class="font-bold">Kelola Barang</div>
                            <div class="text-sm">Tambah, edit, dan hapus barang inventori</div>
                        </a>
                        <a href="{{ route('barangs.pdf') }}" class="block p-4 bg-green-500 hover:bg-green-700 text-white rounded-lg text-center">
                            <div class="text-2xl mb-2">📄</div>
                            <div class="font-bold">Generate PDF</div>
                            <div class="text-sm">Buat laporan PDF inventori barang</div>
                        </a>
                        <div class="block p-4 bg-gray-500 text-white rounded-lg text-center opacity-50 cursor-not-allowed">
                            <div class="text-2xl mb-2">📊</div>
                            <div class="font-bold">Laporan</div>
                            <div class="text-sm">Fitur laporan lainnya (segera hadir)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
