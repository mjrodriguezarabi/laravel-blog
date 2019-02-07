@extends('admin.layout')

@section('title', 'Listado Posts')

@section('styles')

<!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('content')
	<div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="posts-index" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>id</th>
              <th>title</th>
              <th>published_at</th>
              <th>&nbsp;</th>
              
            </tr>
            </thead>
            <tbody>
            	@foreach ($posts as $post)
            		{{-- expr --}}
		            <tr>
		              <td>{{$post->id}}</td>
		              <td>{{$post->title}}
		              </td>
		              <td>{{$post->published_at}}</td>
		              <td>
		              	<a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
		              	<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
		              </td>
		            </tr>
            	@endforeach
            
            </tbody>
            <tfoot>
            
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
@endsection

@section('scripts')

	<!-- DataTables -->
	<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script>
  $(function () {
    
    $('#posts-index').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection