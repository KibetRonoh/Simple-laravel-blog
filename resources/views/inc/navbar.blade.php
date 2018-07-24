			<div class="header-top">
				<!-- container -->
				<div class="container">
					<div class="header-top-right">
						<ul>
                        <!-- Authentication Links -->
                        @guest
                            <a href="{{ route('login') }}"><font color="white">Login</font></a>
									|&nbsp;&nbsp;|
                            <a href="{{ route('register') }}"><font color="white">Register</font></a>
                        @else
                            <li class="dropdown">
                                <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   <font color="white"> {{ Auth::user()->name }} <span class="caret"></span></font>
                                </a>

                                <ul class="dropdown-menu">
									<li> <a href="/dashboard">Dashboard</a></li>
									<li> <a href="/posts/create">Create Post</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    	</ul>

					</div>
				</div>
			</div>
			


			
<div class="header-middle">
				<!-- container -->
	<div class="container">
		<div class="header-middle-logo">
			<a href="/">LaraBlogger</a>
		</div>
		<div class="header-middle-right">
			<div class="phone">
				<span> </span>
				<ul>
					<li class="gray">Phone</li>
					<li>+27 234 0987 </li>
					<li>+27 876 0988 </li>
				</ul>
			<div class="clearfix"> </div>
			</div>
			<div class="location">
				<span> </span>
				<ul>
				 <li class="gray">Address<li>
				 <li>cape town, georgia,</li>
				 <li>South Africa (RSA)</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
			<div class="clearfix"> </div>
	</div>
 <div class="top-nav">
				<!-- container -->
	<div class="container">
		<span class="menu">MENU&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<ul class="nav1">
          <li><a href="/">Home</a><li>
		  <li><a href="/posts">Users Blogs</a><li>                 
		  <li><a href="/about">About us</a><li>                        
		  <li><a href="/services">Services</a><li>               
		</ul>
<!-- script-for-menu -->
		 <script> 
				 $( "span.menu" ).click(function() {
				 $( "ul.nav1" ).slideToggle( 300, function() {
				// Animation complete.
				  });
				 });
							
		</script>
		<!-- /script-for-menu -->
	</div>
	<!-- //container -->
</div>
 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>

 </script>
</div>