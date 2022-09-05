@extends('layouts.main')
@section('container')


<div class="card shadow-sm p-4 bg-body rounded container">
  <p class="h3 mt-2 text-center">Contact Us</p>

  <div class="row mt-3">
    <div class="col-12 col-md-4 d-flex justify-content-center">
      <img src="images/barong.png" class="mx-5" alt="" style="width: fit-content;max-height: 180px;" />
    </div>
    <div class="col col-md" style="height: max-content; padding-bottom:20px">
      <form class="shadow p-3 bg-body rounded" style=" width: 100%;">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 100%" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 100%" />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Message</label>
          <input type="message" class="form-control" id="exampleInputMessage" style="width: 100%" />
        </div>
        <button type="submit" class="btn btn-sm btn-md btn-lg btn-primary mt-3">
          Submit
        </button>
      </form>
    </div>
  </div>


</div>
@endsection