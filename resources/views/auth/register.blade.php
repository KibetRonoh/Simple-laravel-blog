@extends('layouts.app')

@section('content')
<div class="container">
   <div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="/">Home</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Register Now </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form method="POST" action="{{ route('register') }}">	
                             {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                 <div>
                                <input id="name" type="text" placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div>
                                <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          
                            <div>
                                <input id="password" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <input id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="tp">
						    <input type="submit" value="Register">
						 </div>

                            
					   <p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>
                       </form>

				    </div>
			     </div>
		     </div>
	     </div> 
      </div>
  </div> 
</div>             
@endsection
