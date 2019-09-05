@include('shop.header')
	<section>
		<div class="container">
			<div class="row">
			@include('shop.categories')
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img id="image" src="/storage/{{ $single_product->image1 }}" alt="" />

							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <img id="image1" style="height:100px;width:80px" src="/storage/{{ $single_product->image1 }}" alt="">



                                            <img id="image2"  style="height:100px;width:80px" src="/storage/{{ $single_product->image2 }}" alt="">




										  <img id="image3"  style="height:100px;width:80px" src="/storage/{{ $single_product->image3}}" alt="">
										</div>

                                    </div>


                                    <script>
$(function(){
    $("#image1").on('click',function(){
$("#image").attr("src","/storage/{{ $single_product->image1 }}")
    });

    $("#image2").on('click',function(){
        $("#image").attr("src","/storage/{{ $single_product->image2 }}")
            });
            $("#image3").on('click',function(){
                $("#image").attr("src","/storage/{{ $single_product->image3 }}")
                    });



});


                                    </script>


							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{ $single_product->name }}</h2>
								<p>Price: Kshs {{ $single_product->price }}</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
<p class="alert alert-success"></p>
									<label>Quantity:</label>
									<form method="POST">

										<input id="quantity" type="number" value="1" />
										<input id="identity" type="hidden" value="{{  $single_product->id   }}"/>
										<button id="addToCart" type="button" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									</form>
								
								</span>
								<p><b>Available Quantity:</b> {{ $single_product->quantity }}</p>
								<p><b>Condition:</b> New</p>

								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">

								<li class="active"><a href="#reviews" data-toggle="tab">Product Description</a></li>
							</ul>
						</div>
<div class="col">    {!! html_entity_decode($single_product->description)!!}
    </div>




					</div><!--/category-tab-->

					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>
						</div>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous">
</script>
<script>
	jQuery(document).ready(function(){
	   jQuery('#addToCart').click(function(e){
		  e.preventDefault();
		  $.ajaxSetup({
			 headers: {
				 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			 }
		 });
		  jQuery.ajax({
			 url: "{{ url('/addtocart') }}",
			 method: 'post',
			 data: {
				id: jQuery('#identity').val(),
		
				quantity: jQuery('#quantity').val()
			 },
			 success: function(result){
				jQuery('.alert').show();
				jQuery('.alert').html(result.success);
			 }});
		  });
	   });
 </script>
		@include('shop.footer')

