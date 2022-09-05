@extends('layouts.main')
@section('container')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-4 mr-3">
      <h1 class="mt-5" style="font-weight: 600; color:#F8B838"> Braksara</h1>
      <h4>Braile To Aksara Bali</h4>
      <h1 class="mt-5" style="font-weight: 600">Mari Belajar <br> Bahasa Bali disini</h1>
      <a href="/tulisaksara" class="btn btn-warning mb-3" style="background-color: #F8B838; color:white">Klik Disini</a>
    </div>
    <div class="col-sm">
      <img src="images/gambar1.png" alt="" class="w-100" style="height: 500px;object-fit: cover;">
    </div>
  </div>
  <div class=" row">
    <div class="col-12">
      <div class="mt-5" style="background-image: url('/images/gambar2.png');">
        <p class="h1 text-center pt-5 pb-2 text-light">Braksara</p>
        <p class="text-center pb-5 px-5 text-light">Braksara merupakan kepanjangan dari Braile To Aksara Bali. Braile sendiri
          merupakan
          sebuah
          teknologi yang dapat membantu orang Tunanetra dalam membuat suatu penulisan dan Aksara Bali merupakan sebuah
          aksara tradisional yang berasal dari Bali. Jadi Braksara ini sendiri merupakan sebuah aplikasi yang dapat
          membantu seorang Tunanetra dalam melakukan kegiatan menulis Aksara Bali. Aplikasi ini dibantu dengan menggunakan
          sebuah Keyboard Braile khusus yang sudah dirancang dengan menggunakan Aksara Bali lengkap dengan gantungan nya.
        </p>
      </div>
    </div>
  </div>
  <div class="mt-4">
    <p class="h2" style="font-weight: 600">Fitur</p>
    <div class="row">
      <div class="col-md-6 col-12">
        <img src="images/gambar3.png" alt="" class="w-100" style="height: 300px; object-fit: cover;">
      </div>
      <div class="col-md col-12">
        <p class=" mt-2 h4" style="font-weight: 600">Tulis Aksara Bali</p>
        <p class="text-justify">Tulis aksara bali merupakan sebuah fitur utama dari aplikasi Braksara. Fitur dapat membantu seorang
          tunanetra dalam menulis Aksara Bali dimana dengan dibantu menggunakan keyboard Braile dalam mengetik
          baik berupa huruf latin maupun berupa aksara. </p>
      </div>
    </div>
  </div>
  <div class="mt-4">
    <div class="row">
      <div class="col-md-6 col-12 order-2 order-md-1">
        <p class="mt-5 h4" style="font-weight: 600">Membaca Postingan</p>
        <p class="text-justify">Tulis aksara bali merupakan sebuah fitur utama dari aplikasi Braksara. Fitur dapat membantu seorang
          tunanetra dalam menulis Aksara Bali dimana dengan dibantu menggunakan keyboard Braile dalam mengetik
          baik berupa huruf latin maupun berupa aksara. </p>
      </div>
      <div class="col-md-6 col-12 order-1 order-md-2">
        <img src="images/gambar4.png" alt="" class="w-100 mt-5" style="height: 300px; object-fit: cover;">
      </div>

    </div>
  </div>
</div>


@endsection