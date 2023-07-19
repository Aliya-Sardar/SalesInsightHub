@extends('template')

@section('main_Content')

    <div class = "container mt-3 row">
        <div class="col-md-8">
            <h2>Product Recommendations:</h2>
            <p>
            We have analyzed the historical transaction data of various customers to provide you with 
            personalized product recommendations. Our algorithm has identified frequent associations 
            between products frequently bought together. Here are some product suggestions for you:
            </p>

            <br><br>
            <!-- Table to present the data from the python script -->
            <table>
                @foreach ($output as $item)
                    <tr>
                        <th>Product:</th>
                        <td>{{ $item[0] }}</td>                    
                    </tr>
                    <tr>
                        <th>Recommended Product:</th>
                        <td>{{ $item[1] }}</td>
                    </tr>
                    <tr>
                        <th>Support:</th>
                        <td>{{ $item[2] }}</td>
                    </tr>
                    <tr>
                        <th>Confidence:</th>
                        <td>{{ $item[3] }}</td>
                    </tr>
                    
                    <!-- Horizontal line with colspan to span both columns -->
                    <tr>
                        <td colspan="2"><hr></td> 
                    </tr>
                @endforeach
            </table>

            <br><br>

            <p>
                Please note that these recommendations are based on the purchasing patterns of other customers. 
                We hope you find these suggestions helpful and enjoy exploring the amazing products we offer.
            </p>
        </div>

        
        <div class="col-md-4 mt-5">
            <img class="img" src="{{ asset('images/girl2.png') }}" alt="Picture">
        </div>

    </div>

@endsection
