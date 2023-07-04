

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Pembeli') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>data pembeli</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>AM StoreS</h2>
                </div>
                <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('amstore.create') }}"> tambah data</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Nama Barang</th>
                    <th>Alamat</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($amstores as $amstore)
                    <tr>
                        <td>{{ $amstore->id }}</td>
                        <td>{{ $amstore->nama }}</td>
                        <td>{{ $amstore->barang }}</td>
                        <td>{{ $amstore->alamat }}</td>
                        <td>
                            <form action="{{ route('amstore.destroy',$amstore->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('amstore.edit',$amstore->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-danger" href="{{ route('amstore.destroy',$amstore->id) }}">delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $amstores->links() !!}
    </div>
</body>
</html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
