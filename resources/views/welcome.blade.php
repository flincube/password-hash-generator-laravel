
@extends('layouts.master')
@section('title', 'Password Hash Generator')
@section('content')
    <main role="main" class="container">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://i.imgur.com/ermwbzJ.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">MD5 password hash generator</h5>
    <p class="card-text">MD5 password hash generator. MD5 hash is 32 characters long hexadecimal string. Widely used for admin passwords like as older version of Wordpress and Drupal and for custom CMS. Reversing difficulty 4/10 (brute force + dictionary attack). Click to reset / change MD5 password.</p>
    <a href="#" class="btn btn-primary">MD5 Generator</a>
  </div>
</div>
    </main>
@endsection
