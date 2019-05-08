@extends('layouts.front')

@section('page')

<div class="row col-lg-12">
                <iframe class="clip" width="1000" style="display: block;
   margin: 0 auto;" height="500" src="https://www.youtube.com/embed/7i4JSzB8VlU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen  align="middle"></iframe>
</div>


    <div class="container">
        <div class="row pt120">
            <div class="books-grid">
            <div>DRESSES</div>
            <div class="row mb30">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="books-item">
                            <div class="books-item-thumb">
                                <img src="{{ asset($product->image) }}" alt="book">
                                <div class="new">New</div>
                                <div class="sale">Sale</div>
                                <div class="overlay overlay-books"></div>
                            </div>

                            <div class="books-item-info">
                                <a href="{{ route('product.single', ['id' => $product->id ]) }}">
                                    <h5 class="books-title">{{ $product->name }}</h5>
                                </a>

                                <div class="books-price">${{ $product->price }}</div>
                            </div>

                            <a href="{{ route('cart.rapid.add', ['id' => $product->id ]) }}" class="btn btn-small btn--dark add">
                                <span class="text">Add to Cart</span>
                                <i class="seoicon-commerce"></i>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row pb120">

                <div class="col-lg-12">{{ $products->links()  }}</div>

            </div>
        </div>
        </div>
    </div>


  <!-- Start for Body Container-->
  <div id="startContainer" class="skewed-all">      

<div class="description container unskew">
    <div class="row">

    <div class="col-lg-6">
            <h2>WHAT WE DO</h2>
            <p>WE WANT TO BUILD A SUSTAINABLE, FASHIONABLE FUTURE.
            </p>
    </div>

    <div class="col-lg-6">
                    <h2>HOW WE WORK</h2>
                    <p>REGISTER, BROWSE, AND LOAN FROM A FRIEND.
                    </p>
    </div>

</div>
</div>
                </div>

@endsection