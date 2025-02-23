<x-layout>
    <x-slot name="page_name">Halaman Kelurahan
    </x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('pesan')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif
        <a href="{{ url('dashboard/kelurahan/create') }}" class="btn btn-primary">+ Tambah Kelurahan</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Nama kecamatan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($kelurahans as $kelurahan)
            <tr>
                <td>{{ $kelurahan->id }}</td>
                <td>{{ $kelurahan->nama }}</td>
                <td>{{ $kelurahan->nama_kecamatan }}</td>
                <td>
                <a href="{{ url('dashboard/kelurahan/show', $kelurahan->id) }}" class=" btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('dashboard/kelurahan/edit', $kelurahan->id) }}" class=" btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="btn btn-danger btn-sm">
                        <form class="forms-sample d-inline" action="{{ url('dashboard/kelurahan/destroy', $kelurahan->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button  type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $kelurahan->nama }} ?')">
                                <i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </table>
</x-slot>
</x-layout>