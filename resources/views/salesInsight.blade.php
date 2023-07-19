@extends('template')

@section('main_Content')

    <div class = "container mt-3 row">
        <div class="col-md-9">
            <h1>Welcome to Sales Insights Hub</h1>
            <br>
            <p>
            This website utilizes the power of the Apriori algorithm to assist users in selecting products and 
            determining which items should be kept together in their purchases. By analyzing the historical 
            transaction data of various customers, the website can uncover meaningful associations between 
            products frequently bought in combination. Consequently, it recommends items that are often 
            co-purchased, allowing users to make informed decisions about what products complement each other.
            </p>
            <br>
            <p>Choose a product from below drop down list and click the submit button.</p>

            <div class="container d-flex justify-content-center">
                <form id="form" action="{{ route('predict') }}" method="GET">
                    <div class="form-group">
                        <label for="item" class="col-form-label">Choose an Item:</label>
                        <select id ="item" name="item" class="form-control">
                            <option selected>Choose Item</option>
                            <option value="WHITE HANGING HEART T-LIGHT HOLDER">WHITE HANGING HEART T-LIGHT HOLDER</option>
                            <option value="JUMBO BAG RED RETROSPOT">JUMBO BAG RED RETROSPOT</option>
                            <option value="REGENCY CAKESTAND 3 TIER">REGENCY CAKESTAND 3 TIER</option>
                            <option value="PARTY BUNTING">PARTY BUNTING</option>
                            <option value="PACK OF 72 RETROSPOT CAKE CASES">PACK OF 72 RETROSPOT CAKE CASES</option>
                            <option value="NATURAL SLATE HEART CHALKBOARD">NATURAL SLATE HEART CHALKBOARD</option>
                            <option value="JUMBO BAG PINK POLKADOT">JUMBO BAG PINK POLKADOT</option>
                            <option value="HEART OF WICKER SMALL">HEART OF WICKER SMALL</option>
                            <option value="JUMBO STORAGE BAG SUKI">JUMBO STORAGE BAG SUKI</option>
                            <option value="PAPER CHAIN KIT 50'S CHRISTMAS">PAPER CHAIN KIT 50'S CHRISTMAS</option>
                            <option value="JUMBO SHOPPER VINTAGE RED PAISLEY">JUMBO SHOPPER VINTAGE RED PAISLEY</option>
                            <option value="LUNCH BAG SPACEBOY DESIGN">LUNCH BAG SPACEBOY DESIGN</option>
                            <option value="LUNCH BAG CARS BLUE">LUNCH BAG CARS BLUE</option>
                            <option value="SPOTTY BUNTING">SPOTTY BUNTING</option>
                            <option value="JAM MAKING SET PRINTED">JAM MAKING SET PRINTED</option>
                            <option value="LUNCH BAG SUKI DESIGN">LUNCH BAG SUKI DESIGN</option>
                        </select>
                    </div>

                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <img class="img" src="{{ asset('images/girl.png') }}" alt="Picture">
        </div>
    </div>

@endsection