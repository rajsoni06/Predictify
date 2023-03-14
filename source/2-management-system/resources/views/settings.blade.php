@extends('dashboard-layout.base-template')

@section('content')

<div class="container-fluid">

    @if(session('success'))
        <div id="success-box" style="text-align:center;margin-top:20px;" class="alert alert-success col-md-12 alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <script>
            window.onload=function(){
                $("#success-box").delay(3000).fadeOut();
            }
        </script>
    @endif


    <!-- Page Heading -->
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <h4>Voice Settings</h4>
                <hr>

                <form class="user" method="POST" action="{{ route('SettingsChangeVoiceFunctionLink') }}">
                    @csrf <!-- Add the CSRF token field -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span style="font-weight: bold;" class="input-group-text" id="inputGroup-sizing-sm">Select Language:</span>
                        </div>
                        <select class="form-select form-control" name="language" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <option value="tamil">Tamil</option>
                            <option value="sinhala">Sinhala</option>
                            <option value="english">English</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Change</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-3 col-lg-3">
                <h4>Change Password</h4>
                <hr>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span style="font-weight: bold;" class="input-group-text" id="inputGroup-sizing-sm">Current Password:</span>
                    </div>
                    <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="5">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span style="font-weight: bold;" class="input-group-text" id="inputGroup-sizing-sm">New Password:</span>
                    </div>
                    <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="5">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span style="font-weight: bold;" class="input-group-text" id="inputGroup-sizing-sm">Confirm Password:</span>
                    </div>
                    <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" size="5">
                </div>
                <button type="button" class="btn btn-primary btn-sm">Change</button>
            </div>
                                     
        </div>
    </div>
        
</div>

@endsection