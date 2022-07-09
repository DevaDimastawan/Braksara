@extends('layouts.main')
@section('container')
<body style="background:linear-gradient(#15435F,#5084a5,#8bb2cb);">
    <div class="container">
        <h1 class=" display-4 mt-4 text-center font-weight-bold" style="color: #F9B63A; font-size: 50px;"> Braksara <br> <span class="font-weight-normal" style="font-size: 40px;">Tulis Aksara Bali</span> </h1>
        <form class="py-4">
            <div class="mb-0">
              <label for="exampleInputtext" class="form-label" style="color: white;">Tulis Aksara</label>
              <textarea class="form-control shadow-lg p-3 mb-3 bg-body rounded" aria-label="With textarea" rows="7"></textarea>
            </div>
            <div class="mt-0">
              <label for="exampleInputPassword1" class="form-label"  style="color: white;">Latin</label>
              <textarea class="form-control shadow-lg p-3 mb-3 bg-body rounded" aria-label="With textarea" rows="7" disabled style="background: white;"></textarea>
            </div>
            <button type="button" class="btn btn-light rounded" style="border-radius: 15px !important;">Keluarkan Suara</button>
          </form>
    </div>
</body>
@endsection