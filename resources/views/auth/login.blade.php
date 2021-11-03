@extends('layout.index')
@section('content')
<div id="main-wrapper">
    @include('common.login-header')

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="login-register">
                    <h3 class="text-center m-b-20 font-primary">Login</h3>
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mt-4" id="loginform" action="/jobs">
                                
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="text" required="" placeholder="Username"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input class="form-control input-placeholder" type="password" required="" placeholder="Password"> </div>
                                </div>
                                
                                <div class="form-group text-center">
                                    <div class="col-xs-12">
                                        <button class="btn btn-block btn-lg button-primary" type="submit" onclick="UserLogin()">Log In</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="d-flex no-block align-items-center">
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)" id="to-recover" class="text-muted forgot-link"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-4">
                                    <div class="col-sm-12 text-center font-primary">
                                        Don't have an account? <a href="{{route('register')}}" class="text-info m-l-5 font-primary"><b>Register</b></a>
                                    </div>
                                </div>
                            </form>
                            <form class="form-horizontal" id="recoverform" action="javascript:;">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <h3 class="font-primary">Recover Password</h3>
                                        <p class="text-muted font-primary">Enter your Email and instructions will be sent to you! </p>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" required="" placeholder="Email"> </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn button-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
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

<script>
    function UserLogin() {
        window.location.href = '/jobs'
    }
</script>
@endsection