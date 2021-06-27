   
   @extends('layouts.layout')

   @section('content')
       
   {{-- <div class="">
    <div class="container">
        <div class="image">
            <h1>UVE EAGLE CONFECTIONERIES</h1>
        </div>

        <p class="message">
            {{ session('message') }}
        </p>
        
        <a href="{{ route('pizzas.create') }}">Order a pizza</a>
       
    </div>
</div> --}}


<header>
    <!-- Top Nav -->
    <nav class="top-nav container">
        <div class="logo">Orangies</div>
        <ul>
            <li>
                <a href="#">Shop</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                    <a href="">Blog</a>
            </li>
            <li>
                    <a href="">Cart</a>
            </li>
        </ul>
    </nav>
    <!-- End of Top Nav -->

    <!-- Hero -->
    <div class="hero container">
        <!-- Hero Copy -->
        <div class="hero-copy">
            <h1>The Taste You Remember</h1>
            <p>We are the leading confectioneers in Sri Lanka</p>
            <div class="hero-buttons">
                <a href="#" class="button button-white">Shop</a>
                <a href="#" class="button button-black">See More</a>
            </div>
        </div>
        <!-- End of Hero Copy -->

        <!-- Hero Image -->
        <div class="hero-image">
            <img src="/images/2779844.png" alt="Hero Image">
        </div>
        <!-- End of Hero Image -->
    </div>
    <!-- End Hero -->

</header>

    <section class="featured-section">
        <div class="container">
            <h1 class="text-center">Featured Products</h1>
            <p class="text-center section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aperiam atque dolorum perspiciatis. Temporibus nulla accusamus magnam nam ipsum dolorum, obcaecati explicabo unde eaque voluptas ipsa fugit amet non alias.</p>
            <div class="button-container text-center">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>
        

        <div class="products text-center">
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
            <div class="product">
                <a href="#"><img src="/images/product.png" alt="Product 1"></a>
                <a href="#"><div class="product-name">Milk Toffee (XL)</div></a>
                <div class="product-price">$45.55</div>
            </div>
        </div>
        <!-- End of Products -->

        <div class="text-center button-container">
            <a href="#" class="button">
                View More Products
            </a>
        </div>
    </div>
    <!-- End of Container -->
    </section>
    <!-- End of Featured -->

    <section class="blog-section">
        <div class="container">
            <h1 class="text-center">Opcoming Products</h1>
            <p class="section-description">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa esse iusto in magni cumque tempore qui labore quos sed dicta autem, aspernatur ut ea? Harum sequi possimus consequuntur quo perferendis.
            </p>
            <div class="blog-posts">
                <div class="blog-post">
                    <a href="#"><img src="/images/upcoming-1.png" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                    <div class="blog-description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae explicabo laudantium! Deserunt, dolor suscipit ratione pariatur qui exercitationem iusto, perferendis consequatur autem magni fugit aliquam quia esse doloremque natus!
                    </div>
                </div>

                <div class="blog-post">
                    <a href="#"><img src="/images/upcoming-1.png" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                    <div class="blog-description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae explicabo laudantium! Deserunt, dolor suscipit ratione pariatur qui exercitationem iusto, perferendis consequatur autem magni fugit aliquam quia esse doloremque natus!
                    </div>
                </div>

                <div class="blog-post">
                    <a href="#"><img src="/images/upcoming-1.png" alt="Blog Image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title</h2></a>
                    <div class="blog-description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic recusandae explicabo laudantium! Deserunt, dolor suscipit ratione pariatur qui exercitationem iusto, perferendis consequatur autem magni fugit aliquam quia esse doloremque natus!
                    </div>
                </div>
            </div>
            <!-- End of Blog Posts -->
        </div>
        <!-- End of Container -->
    </section>
    <!-- End of Blog Section -->



   
    @endsection