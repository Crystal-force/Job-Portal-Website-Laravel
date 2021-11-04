@extends('layout.index')
@section('content')

<div id="main-wrapper">
  @include('common.jobs-header')
    <div class="main-body mt-2">
        <div class="container">
            <div class="row d-flex align-item-center">
              <div class="col-md-6 align-self-center text-right">
                  <a href="{{route('application-status')}}">application status</a>
              </div>
              <div class="col-md-6 align-self-center">
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