@extends('layout\layout')

@section('navigationbar')
    @include('layout\navigation')
@endsection
@section('contents')

<section class="content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Clients Request</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Client Name</th>
                <th>Client Surnme</th>
                <th>Client Phonenumber</th>
                <th>longitude</th>
                <th>latitude</th>
              </tr>
              </thead>

              <tbody>
                @foreach ($requests_user as $rq)
              <tr>
                <td>{{$rq->name}}</td>
                <td>{{$rq->surname}}</td>
                <td>{{$rq->phone_number}}</td>
                <td>{{$rq->longitude}}</td>
                <td>{{$rq->latitude}}</td>
              </tr>
              @endforeach
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
@endsection

@section('modals')
@endsection

@section('pagejs')
@endsection
