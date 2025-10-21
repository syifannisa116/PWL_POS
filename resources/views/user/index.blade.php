@extends('layouts.template') 
 
@section('content') 
  <div class="card card-outline card-primary"> 
      <div class="card-header"> 
        <h3 class="card-title">{{ $page->title }}</h3> 
        <div class="card-tools"> 
          <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create') }}">Tambah</a> 
        </div> 
      </div> 
      <div class="card-body"> 
        <table class="table table-bordered table-striped table-hover table-sm" 
id="table_user"> 
          <thead> 
            <tr><th>ID</th><th>Username</th><th>Nama</th><th>Level 
Pengguna</th><th>Aksi</th></tr> 
          </thead> 
      </table> 
    </div> 
  </div> 
@endsection 
 
@push('css') 
@endpush 
 
@push('js') 
  <script>
$(function() {
    $('#table_user').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('user/list') }}",
        columns: [
            { data: 'user_id', name: 'user_id' },
            { data: 'username', name: 'username' },
            { data: 'nama', name: 'nama' },
            { data: 'level.level_nama', name: 'level.level_nama' },
            { data: 'aksi', name: 'aksi', orderable: false, searchable: false },
        ]
    });
});
</script>

@endpush