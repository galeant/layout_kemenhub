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
                    <h4>Tabel of Report<h4>
                    <hr>
                </div>
                <div class="card-block">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Start Period</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">End Period</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-danger btn-block"><i class="feather icon-download"></i>Download File</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable"
                                        class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>MAK Code</th>
                                            <th>Monitored Title RKAKL</th>
                                            <th>Total</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data  as $dt)
                                        <tr>
                                            <td>{{$dt['mak_code']}}</td>
                                            <td>{{$dt['mon_rkakl']}}</td>
                                            <td>{{$dt['total']}}</td>
                                            <td>{{$dt['start_date']}}</td>
                                            <td>{{$dt['end_date']}}</td>
                                            <td>{{$dt['status']}}</td>
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