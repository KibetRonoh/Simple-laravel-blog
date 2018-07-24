 @extends('layouts.app')

 @section('content')
<!-- container -->
<div class="container">
	<div class="blog-text">
		<h3>Treaning News Posted by Admin only</h3>
	</div>
	<hr>

	<!-- Main blog posts -->
	<div class="col-md-8 blog-top-left-grid">
		<div class="left-blog">
			<div class="blog-left">
							
				<div class="blog-left-right">
					<a href="">Phasellus ultrices tellus eget ipsum ornare molestie </a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
							dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
							fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
							estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
						</p>
				</div>
			</div>
	<div class="blog-left">
		<div class="blog-left-left">
			<p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on November 20, 2017</a></p>
			<a href=""><img src="storage/cover_images/g2.jpg" alt="" /></a>
		</div>
	<div class="blog-left-right">
		<a href="">Phasellus ultrices tellus eget ipsum ornare molestie </a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
			dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
			fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
			estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
			</p>
	</div>
</div>
	<div class="blog-left">
		<div class="blog-left-left">
		    <p>Posted By <a href="#">Admin</a> &nbsp;&nbsp; on November 17, 2017</a></p>
			<a href=""><img src="/storage/cover_images/10.jpg" alt="" /></a>
		</div>
		<div class="blog-left-right">
			<a href="">Phasellus ultrices tellus eget ipsum ornare molestie</a>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin 
			dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus 
			fringilla hendrerit lectus nec vehicula. ultrices tellus eget ipsum ornare consectetur adipiscing elit.Sed blandit .
			estibulum aliquam neque nibh, sed accumsan nulla ornare sit amet. 
			</p>
		</div>
							
	</div>
</div>
</div>
<!-- //Main blog Posts -->

<!--Top right side grid  -->
<div class="col-md-4 blog-top-right-grid">
	<div class="Categories">
		<h3>Categories</h3>
			<ul>
				<li><a href="#">Phasellus sem leo, interdum quis risus</a></li>
				<li><a href="#">Nullam egestas nisi id malesuada aliquet </a></li>
				<li><a href="#"> Donec condimentum purus urna venenatis</a></li>
				<li><a href="#">Ut congue, nisl id tincidunt lobor mollis</a></li>
				<li><a href="#">Cum sociis natoque penatibus et magnis</a></li>
				<li><a href="#">Suspendisse nec magna id ex pretium</a></li>
			</ul>
	</div>
<div class="comments">
</div>
<!--//Top right side grid  -->

	<br>
	<br>
<!-- Latest Post side -->
<div class="comments">
	<h3>Recent Headlines</h3>
	<div class="comments-text">
		<div class="col-md-3 comments-left">
			<img src="/storage/cover_images/user.png" alt="" />
		</div>
			<div class="col-md-9 comments-right">
				<h5>Admin</h5>
				<a href="/abou">Phasellus sem leointerdum risus</a> 
				<p>November 24,2017 6:09:pm</p>
			</div>
		<div class="clearfix"> </div>
	</div>
<div class="comments-text">
	<div class="col-md-3 comments-left">
		<img src="/storage/cover_images/user.png" alt="" />
	</div>
		<div class="col-md-9 comments-right">
			<h5>Admin</h5>
			<a href="#">Phasellus sem leointerdum risus</a> 
			<p>November 16,2017 4:34:pm</p>
		</div>
		<div class="clearfix"> </div>
</div>
<div class="comments-text">
	<div class="col-md-3 comments-left">
		<img src="/storage/cover_images/user.png" alt="" />
	</div>
		<div class="col-md-9 comments-right">
			<h5>Admin</h5>
				<a href="#">Phasellus sem leointerdum risus</a> 
				<p>November 10,2017 8:21:am</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<!--//Latest post side  -->
</div></div>
@endsection
            
    