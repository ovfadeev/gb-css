<? include ($_SERVER['DOCUMENT_ROOT'].'/include/header.php'); ?>

<div class="page-default page-product" id="app" data-app="page-product">
    <div class="wrapper">
    	<div class="page-title">
    		<h1>New Arrivals</h1>
    		<div class="breadcrumb">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">New Arrivals</a></li>
				</ul>
			</div>
    	</div>
    	<aside class="sidebar">
    		<nav class="sidebar-nav">
    			<div class="accordion-item">
    				<div class="accordion-item-title open">
    					<a href="#">Category <i></i></a>
    				</div>
    				<div class="accordion-item-desc active">
    					<ul class="accordion-item-links">
    						<li>
    							<a href="#">Accessories</a>
    						</li>
    						<li>
    							<a href="#">Bags</a>
    						</li>
    						<li>
    							<a class="active" href="#">Denim</a>
    						</li>
    						<li>
    							<a href="#">Hoodies & Sweatshirts</a>
    						</li>
    						<li>
    							<a href="#">Jackets & Coats</a>
    						</li>
    						<li>
    							<a href="#">Pants</a>
    						</li>
    						<li>
    							<a href="#">Polos</a>
    						</li>
    						<li>
    							<a href="#">Shirts</a>
    						</li>
    						<li>
    							<a href="#">Shoes</a>
    						</li>
    						<li>
    							<a href="#">Sweaters & Knits</a>
    						</li>
    						<li>
    							<a href="#">T-Shirts</a>
    						</li>
    						<li>
    							<a href="#">Tanks</a>
    						</li>
    					</ul>
    				</div>
    				<div class="accordion-item-title">
    					<a href="#">BRAND <i></i></a>
    				</div>
    				<div class="accordion-item-title">
    					<a href="#">dESIGNER <i></i></a>
    				</div>
    			</div>
    		</nav>
    	</aside>
	    <main class="product-cnt">
	    	<div class="product-filter">
	    		<form action="">
		    		<div class="filter-params-list">
		    			<div class="items">
		    				<div class="items-title">
		    					Trending now
		    				</div>
		    				<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_1" checked />
			    						<span>Bohemian</span>
			    					</label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_2" />
			    						<span>Floral</span>
			    					</label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_3" />
			    						<span>Lace</span>
			    					</label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_4" />
			    						<span>Floral</span>
			    					</label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_5" />
			    						<span>Lace</span>
			    					</label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox-text">
			    					<label>
			    						<input type="checkbox" name="param1" value="1_6" />
			    						<span>Bohemian</span>
			    					</label>
			    				</div>
			    			</div>
		    			</div>
		    			<div class="items">
		    				<div class="items-title">
		    					Size
		    				</div>
		    				<div class="items-param">
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_1" checked />
                                        <i></i>
                                        XXS
                                    </label>
			    				</div>
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_5" />
                                        <i></i>
                                        L
                                    </label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_2" />
                                        <i></i>
                                        XS
                                    </label>
			    				</div>
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_6" />
                                        <i></i>
                                        XL
                                    </label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_3" />
                                        <i></i>
                                        S
                                    </label>
			    				</div>
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_7" />
                                        <i></i>
                                        XXL
                                    </label>
			    				</div>
			    			</div>
			    			<div class="items-param">
			    				<div class="checkbox">
			    					<label>
                                        <input type="checkbox" name="param2" value="2_4" />
                                        <i></i>
                                        M
                                    </label>
			    				</div>
			    			</div>
		    			</div>
		    			<div class="items">
		    				<div class="items-title">
		    					Price
		    				</div>
							<div class="items-param-range">
								<div class="range">
									<div class="js-filter-slider-range" data-min="100" data-max="10000"></div>
									<div class="range-value">
										<input type="numder" class="js-min-range input-value" name="minprice" value="100" readonly />
										<input type="numder" class="js-max-range input-value" name="maxprice" value="10000" readonly />
									</div>
								</div>
							</div>
		    			</div>
	    			</div>
	    		</form>
	    	</div>
	    	<div class="product-sort">
				<div class="param-sort">
					<span>Sort By</span>
					<select name="by" value="">
						<option value="1">Name</option>
						<option value="2">Popular</option>
					</select>
				</div>
				<div class="param-sort">
					<span>Show</span>
					<select name="count-page" value="">
						<option value="10">10</option>
						<option value="100">100</option>
					</select>
				</div>
	    	</div>
		    <div class="product-list">
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    	<div class="product-list-items">
		    		<div class="product-item">
			    		<div class="image" style="background-image: url('/images/product1.jpg');">
			    			<div class="image-overlay">
				    			<a href="#"><i></i>Add to cart</a>
				    		</div>
			    		</div>
						<div class="desc">
							<div class="name">Mango  People  T-shirt</div>
							<div class="price">$52.00</div>
						</div>
					</div>
		    	</div>
		    </div>
		    <div class="nav-page">
                <div class="page">
                    <ul>
                        <li>
                            <a href="#" class="prev"></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <div>2</div>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#" class="next"></a>
                        </li>
                    </ul>
                </div>
                <div class="page-btn">
                    <a href="#">View All</a>
                </div>
            </div>
	    </main>
	</div>
	<div class="feature-cnt">
		<div class="wrapper">
			<div class="feature-list">
				<div class="feature-items">
					<div class="img">
						<img src="/images/icons/free-delivery.png">
					</div>
					<div class="name">
						Free Delivery
					</div>
					<div class="desc">
						Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
					</div>
				</div>
				<div class="feature-items">
					<div class="img">
						<img src="/images/icons/sales.png">
					</div>
					<div class="name">
						Sales & discounts
					</div>
					<div class="desc">
						Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
					</div>
				</div>
				<div class="feature-items">
					<div class="img">
						<img src="/images/icons/quality.png">
					</div>
					<div class="name">
						Quality assurance
					</div>
					<div class="desc">
						Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<? include ($_SERVER['DOCUMENT_ROOT'].'/include/footer.php'); ?>