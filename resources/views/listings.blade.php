<h1>{{ $heading }}</h1>

<ul>
    @foreach ($listings as $listingArray)
        @foreach ($listingArray as $listing)
            <li>{{ $listing }}</li>
        @endforeach
        <br>
    @endforeach
</ul>