@extends('layouts.main')
@section('container')
<div class="container">
    <div class="card-body">
      <div class="card mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <p class="h3 mt-2 text-center">Contact Us</p>

        <div class="row mt-3">
          <div class="col-sm d-flex justify-content-center" >
            <img
              src="images/barong.png"
              class="mx-5 img-fluid"
              alt=""
              style="max-width: 300px !important; max-height: 300px !important"
            />
          </div>
          <div class="col-sm">
            <form
              class="shadow p-3 mb-5 bg-body rounded"
              style="height: 400px; width: 100%;"
            >
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Full Name</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  style="width: 100%"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  style="width: 100%"
                />
                <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Message</label
                >
                <input
                  type="message"
                  class="form-control"
                  id="exampleInputMessage"
                  style="width: 100%"
                />
              </div>

              <button type="submit" class="btn btn-primary mt-3">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection