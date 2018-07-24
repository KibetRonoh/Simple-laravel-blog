@extends('layouts.app')
	<!-- container -->
@section('content')
<h2><center>{{$title}}</center></h2>
<hr>
<div class="container">
	<div class="col-md-4 about-left">
		<h3>Breaking News</h3>
		<img src="images/g8.jpg" alt="" />
		<h4>Nunc vel mauris arcu. Donec faucibus magna eu pharetra pharetra. Phasellus sem leo.</h4>
		<p>Fusce tempus semper pretium. Donec orci dui, viverra dapibus risus eu, euismod faucibus risus. 
		Maecenas fermentum justo cursus commodo vitae efficitur lectus euismod. Phasellus scele risque lectus quis nisl 
		hendrerit accumsan. Sed tristique, lectus et faucibus dictum, nulla eros aliquet tortor, quis auctor massa justo ac 
		sem. Curabitur euismod ante risus.
		</p>
	</div>
	<div class="col-md-4 about-middle">
	<h3>Blogging</h3>
		<div class="about-middle-info">
			<h4>Donec faucibus magna.</h4>
			<p>Fusce tempus semper pretium. Donec orci dui, viverra dapibus risus eu .
			</p>
		</div>
		<div class="about-middle-info">
			<h4>Suspendisse nec magna id</h4>
			<p>Fusce tempus semper pretium. Donec orci dui, viverra dapibus risus eu .
			lectus et faucibus dictum, nulla eros aliquet tortor.
			</p>
		</div>
		<div class="about-middle-info">
		<h4>Maecenas fermentum justo</h4>
		<p>Fusce tempus semper pretium. Donec orci dui, viverra dapibus risus eu .
		</p>
		</div>
	</div>
		<div class="col-md-4 about-right">
			<h3>User Blogging Section</h3>
			<div class="about-right-info">
				<h5>Maecenas fermentum justo cursus commodo vitae efficitur lectus euismod.</h5>
				<p>Fusce tempus semper pretium. Donec orci dui, viverra dapibus risus eu, euismod faucibus risus. 
				Maecenas fermentum justo cursus commodo vitae efficitur lectus euismod. Phasellus scele risque lectus quis.
				</p>
				<ul>
					<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
					<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
			
</div>
@endsection
            
    