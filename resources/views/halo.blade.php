<html>
<head>
        <!--memangggil bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<body>

    @php
    $isActive=false;
    $hasError=true;
    @endphp

    <span @class([ 'p-4' , 'font-bold'=> $isActive,
        'text-gray-500'=> !$isActive,
        'bg-danger'=> $hasError
        ])>{{$name}}
    </span>
    <span class="p-4 text-gray-500 bg-danger">{{$name}}</span>
    <hr>
    @foreach($array as $data)
    @if($loop->first)
    ini adalah index pertama
    @endif

    @if($loop->last)
    ini adalah index terakhir
    @endif

    <p>This is data {{$data}}</p>
    @endforeach

    <hr>
    @forelse($array as $data)
    <li>{{$data}}</li>
    @empty
    <p>No data</p>
    @endforelse

    <hr>
    @foreach($array as $data)
    <p>This data {{$data}}</p>
    @endforeach

    <hr>
    @for($i=0;$i<10;$i++) the current value is {{$i}} <br>
        @endfor
        <hr>
    @switch($name)
    @case("JongKoding")
    <h1>Halo ,aku {{$name}}</h1>
    @break
    @case("")
    <h1>Maaf aku tidak punya nama</h1>
    @break
    @default
    <h1>halo aku bukan JongKoding</h1>
    @endswitch
    <hr>


    @auth
    user diautentikasi
    @endauth

    @guest
    user sebagai guest
    @endguest

<hr>
    @if($name=="")
    <h1>Maaf aku tidak punya nama</h1>
    @elseif($name=="Jong Koding")
    <h1>Halo ,aku {{$name}}</h1>
    @else<h1>halo aku bukan JongKoding</h1>
    @endif

    <hr>
    <h1>Halo aku, {{$name}}</h1>
    <h1>Halo aku, <?=$name?></h1>
    <h1>Halo aku, <?php echo $name?></h1>

    <script>
        var app = <?php echo json_encode($array); ?>
        // var app_two = @json($array);
        </script>
</body>
</html>