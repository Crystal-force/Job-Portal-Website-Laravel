@extends('layout.index')
@section('content')
<div id="main-wrapper">
    @include('common.login-header')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="login-register">
                    <h3 class="text-center m-b-20 font-second login-title">Register User</h3>
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" id="loginform" action="index.html">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="text" required="" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="text" required="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="password" required="" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="password" required="" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="text" required="" placeholder="Mobile number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="text" required="" placeholder="Enter zipcode to select your address">
                                    </div>
                                </div>
                                <div class="form-group text-center ">
                                    <div class="col-xs-12">
                                        <button class="btn btn-block btn-lg button-primary" type="submit">Register</button>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-12 text-center font-second">
                                        Already have an account? <a href="{{route('login')}}" class="text-info m-l-5 font-second"><b>Login</b></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection