@extends('layout.index')
@section('content')

<div id="main-wrapper">
  @include('common.jobs-header')
    <div class="main-body mt-2">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-one">
                            <a href="javascript:;" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="far fa-file-archive"></i></span>
                                  <h3 class="card-title ml-3">upload/View CV's</h3>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-two">
                            <a href="javascript:;" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="fas fa-history"></i></span>
                                  <h3 class="card-title ml-3">employment history</h3>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-one">
                            <a href="{{route('application-status')}}" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="far fa-hand-point-left"></i></span>
                                  <h3 class="card-title ml-3">applications status</h3>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-two">
                            <a href="{{route('jobs')}}" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="far fa-handshake"></i></span>
                                  <h3 class="card-title ml-3">latest Jobs</h3>
                                  <span class="label menu-status-danger"></span>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-one">
                            <a href="javascript:;" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="far fa-question-circle"></i></span>
                                  <h3 class="card-title ml-3">agency support team</h3>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="card">
                          <div class="card-body menu-card-two">
                            <a href="javascript:;" class="each-menu">
                              <div class="m-t-30 m-b-20">
                                  <span class="display-5"><i class="far fa-comment-alt"></i></span>
                                  <h3 class="card-title ml-3">messages</h3>
                                  <span class="label label-danger menu-status-success"></span>
                                </div>
                            </a>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                  <h2 class="font-second backoffice">Backoffice</h2>
                  <div class="update-area mt-3">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-placeholder" type="text" required="" value="chris smith" placeholder="Username"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-placeholder" type="email" required="" value="info@email.com" placeholder="Email"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-placeholder" type="text" required="" value="Password123!" placeholder="Password"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-placeholder" type="text" required=""  value="070928819" placeholder="Mobile number"> </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control input-placeholder" type="text" required=""  value="2 Sheefield St, Avon. Ab10" placeholder="Zip code to select address"> </div>
                    </div>
                    <div class="form-group upload-img">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="upload-area">
                            <div class="remove-btn-group">
                              <div class="input-group-addon btn btn-default btn-file upload-btn">
                                  <span class="fileinput-new">Upload Image</span>
                                  <div class="fileinput-exists">Change</div>
                                  <input type="hidden">
                                  <input type="file" name="..."> 
                              </div>
                                  <a href="javascript:void(0)" class="input-group-addon btn btn-default fileinput-exists"
                                  data-dismiss="fileinput" style="background-color: unset; color:rgb(172, 25, 25); font-weight:600">Remove</a>
                            </div>
  
                            <div>
                              <p class="fileinput-filename font-primary"></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                      <button class="btn btn-lg button-primary" type="submit">Update details</button>
                    </div>
                  </div>
              </div>
            </div>
        </div>

        <div class="container">
          <div class="row col-12">
            <div class="col-6">

            </div>
            <div class="col-6">
              <div class="update-area">
                
              </div>
            </div>
          </div>
        </div>
      
    </div>
    
</div>
{{-- <div class="footer-banner">
  <div></div>
</div> --}}
@endsection