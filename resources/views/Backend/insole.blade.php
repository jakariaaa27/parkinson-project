@extends('Backend.layouts.app') 
@section('content')
<!-- start page content -->
<div class="page-content-wrapper">
  <div class="page-content">
    <div class="page-bar">
      <div class="page-title-breadcrumb">
        <div class=" pull-left">
          <div class="page-title">Insole Data</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
          <li>
            <i class="fa fa-home"></i>&nbsp; <a class="parent-item" href="index.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>
          </li>
          <li class="active">Insole Data</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-box">
          <div class="card-head">
            <header>Patient List</header>
            <div class="tools">
              <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
              <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
              <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
            </div>
          </div>
          <div class="card-body ">
            <table id="example1" class="display" style="width:100%;">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>Patient Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>1</td>
                    <td>Name</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end page content --> 
@endsection