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
                <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data" class="max-w mx-auto">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('nama') is-invalid @enderror name="nama"
                        value="{{old('nama')}}">

                        @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tempat lahir</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('tempatlahir') is-invalid @enderror name="tempatlahir"
                        value="{{old('tempatlahir')}}">

                        @error('tempatlahir')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tanggal Lahir</label>
                        <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('tanggallahir') is-invalid @enderror name="tanggallahir"
                        value="{{old('tanggallahir')}}">

                        @error('tanggallahir')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Alamat</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('alamat') is-invalid @enderror name="alamat"
                        value="{{old('alamat')}}">

                        @error('alamat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Jenis Kelamin</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('jeniskelamin') is-invalid @enderror name="jeniskelamin"
                        value="{{old('jeniskelamin')}}">

                        @error('jeniskelamin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pendidikan</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('pendidikan') is-invalid @enderror name="pendidikan"
                        value="{{old('pendidikan')}}">

                        @error('pendidikan')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            No. Telp/ Hp</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('hp') is-invalid @enderror name="hp"
                        value="{{old('hp')}}">

                        @error('hp')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kota Surat di Tulis</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('kota') is-invalid @enderror name="kota"
                        value="{{old('kota')}}">

                        @error('kota')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tanggal Surat di Tulis</label>
                        <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('tanggal') is-invalid @enderror name="tanggal"
                        value="{{old('tanggal')}}">

                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Surat di Tujukan Kepada</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('kepada') is-invalid @enderror name="kepada"
                        value="{{old('kepada')}}">

                        @error('kepada')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Perusahaan</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('pt') is-invalid @enderror name="pt"
                        value="{{old('pt')}}">

                        @error('pt')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Alamat Perusahaan</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('alamatpt') is-invalid @enderror name="alamatpt"
                        value="{{old('alamatpt')}}">

                        @error('alamatpt')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Posisi yang di Lamar</label>
                        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        @error('loker') is-invalid @enderror name="loker"
                        value="{{old('loker')}}">

                        @error('loker')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-4">
                        <label for="">Lampiran</label>
                        <textarea class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                        placeholder="Write your thoughts here..." name="lampiran" id="message">
                            {{old('lampiran')}}
                        </textarea>

                        @error('lampiran')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>

                </form>
                
                </div>
        </section>
</x-app-layout>