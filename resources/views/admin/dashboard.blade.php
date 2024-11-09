<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full border-collapse border table-auto">
                        <thead>
                            <tr>
                              <th class="border border-slate-300" >No</th>
                              <th class="border border-slate-300">Nama</th>
                              <th class="border border-slate-300">Alamat</th>
                              <th class="border border-slate-300">No. Tlp</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($lamaran as $item)
                            <tr>
                                <td class="border border-slate-300">{{ $loop->iteration }}</td>
                                <td class="border border-slate-300">{{$item->nama}}</td>
                                <td class="border border-slate-300">{{$item->kota}}</td>
                                <td class="border border-slate-300">{{$item->hp}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-2">{{ $lamaran->links() }}</div>
        </div>
        </div>
</x-app-layout>
