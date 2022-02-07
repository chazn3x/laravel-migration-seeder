<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travels</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header>
        <div class="title-wrapper">
            <h1>Travels</h1>
            <h2>Find your next destination</h2>
            <p>Search deals on hotels, homes, and much more...</p>
        </div>
    </header>
    <main class="container">
        <div class="cards">
            @foreach ($travels as $travel)
                <div class="card">
                    <div class="travel-preview">
                        <img src="https://picsum.photos/250/150?random={{$loop->iteration}}">
                    </div>
                    <div class="travel-info">
                        <h3 class="travel-destination">{{$travel->destinations}}</h3>
                        <h4 class="travel-name">{{$travel->trip_names}}</h4>
                        <p class="options"><span class="label">Night(s): </span>{{$travel->nights}}</p>
                        <p class="options"><span class="label">Stay address: </span>{{$travel->stay_addresses}}</p>
                        <p class="options"><span class="label">Adults: </span>{{$travel->adults}}</p>
                        <p class="options"><span class="label">Children: </span>{{$travel->children}}</p>
                        <p class="options"><span class="label">Rooms: </span>{{$travel->rooms}}</p>
                        <p class="options"><span class="label">Date: </span>{{$travel->dates}}</p>
                        @if ($travel->flight_included)
                            <p class="options"><span class="label">Flight included</span></p>
                        @endif
                        @if ($travel->breakfast_included)
                            <p class="options"><span class="label">Breakfast included</span></p>
                        @endif
                        <h4 class="price">{{$travel->prices}}€</h4>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>