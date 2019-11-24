@extends('layout')

@section('css')

@endsection

@section('content')

<!-- Page-body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Zero config.table start -->
            <div class="card">
                <div class="card-header mb-0">
                    <h4>Tabel of Upload<h4>
                    <hr>
                </div>
                <div class="card-block">
                    <div class="row mb-3">
                        <div class="col-md-3 offset-md-9">
                            <button class="btn btn-success btn-block"><i class="feather icon-upload"></i>Upload File</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable"
                                        class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Upload History</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $dt)
                                        <tr>
                                            <td>{{ $dt['up_his'] }}</td>
                                            <td>{{ $dt['status'] }}</td>
                                            <td>{{ $dt['date'] }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page-body end -->
@endsection

@section('js')

@endsection