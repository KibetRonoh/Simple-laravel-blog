@extends('layouts.app')
<!-- Start Section -->
@section('content')
<!-- Start of the container -->
<div class="container">
    <div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="/">Home</a><span>|</span></li>
				<li>Login</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">LogIn to your Account </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form  method="POST" action="{{ route('login') }}">
                             {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div>
							<input id="email" type="email" Placeholder="Email" name="email" 
                            value="{{ old('email') }}" required autofocus>
							    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                             <div>
                                <input id="password" type="password" Placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             </div>
                        	</div>

                            <div class="tp">
								<input type="submit" value="Login">
							</div>
						</form>
					</div>
						<br>
					<p><a href="{{ route('password.request') }}"> Forgot Your Password?</a></p>
                        <br>
				    <p><a href="{{ route('register') }}"> Don't have an account?</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--Ending Section  -->
@endsection
