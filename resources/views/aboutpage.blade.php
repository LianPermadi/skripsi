@extends('layout.main')
@section('container')
    <h1> Halaman About</h1>
    {{-- Bisa menggunakan PHP --}}
    <h3><?php echo $name; ?></h3> 
{{-- sintaks blade --}}
    <p>{{ $email }} </p>
    {{-- php = --}}
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200" height="200" class="img-thumnail rounded-circle">
@endsection