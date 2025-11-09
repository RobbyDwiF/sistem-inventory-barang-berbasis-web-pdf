<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <a href="{{ route('barangs.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Kembali
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-medium mb-2">Informasi Barang</h3>
                            <div class="space-y-2">
                                <p><strong>ID:</strong> {{ $barang->id }}</p>
                                <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>
                                <p><strong>Deskripsi:</strong> {{ $barang->deskripsi ?? '-' }}</p>
                                <p><strong>Stok:</strong> {{ $barang->stok }}</p>
                                <p><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
                                <p><strong>Dibuat:</strong> {{ $barang->created_at->format('d M Y H:i') }}</p>
                                <p><strong>Diupdate:</strong> {{ $barang->updated_at->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-2">
                        <a href="{{ route('barangs.edit', $barang) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                        <a href="{{ route('barangs.pdf.single', $barang) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Generate PDF
                        </a>
                        <form action="{{ route('barangs.destroy', $barang) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
