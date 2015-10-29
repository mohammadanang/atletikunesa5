@extends('admin.layouts.master')

@section('title')
	{{ $title }}
@stop

@section('content')
<div class="row">
  <div class="col-lg-12">
      <section class="panel">
          <header class="panel-heading">
             Pendaftaran Admin
          </header>
          <div class="panel-body">
              <div class="form">
                  <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="{{ route('registeradmin') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group ">
                          <label for="noi" class="control-label col-lg-2">No Identitas</label>
                          <div class="col-lg-10">
                              <input class=" form-control" id="noi" name="noi" type="text" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="name" class="control-label col-lg-2">Nama</label>
                          <div class="col-lg-10">
                              <input class=" form-control" id="name" name="name" type="text" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="other" class="control-label col-lg-2">Keterangan</label>
                          <div class="col-lg-10">
                              <input class=" form-control" id="other" name="other" type="text" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="email" class="control-label col-lg-2">Email</label>
                          <div class="col-lg-10">
                              <input class="form-control " id="email" name="email" type="email" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="password" class="control-label col-lg-2">Password</label>
                          <div class="col-lg-10">
                              <input class="form-control " id="password" name="password" type="password" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                          <div class="col-lg-10">
                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                          </div>
                      </div>
                      <div class="form-group ">
                          <label for="agree" class="control-label col-lg-2 col-sm-3">Setujui persyaratan</label>
                          <div class="col-lg-10 col-sm-9">
                              <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-danger" type="submit">Save</button>
                              <button class="btn btn-default" type="button">Cancel</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </section>
  </div>
</div>
@stop

@section('script')
    <script type="text/javascript" src="admin/js/jquery.validate.min.js"></script>
    <!--script for this page-->
    <script src="admin/js/form-validation-script.js"></script>
@stop
