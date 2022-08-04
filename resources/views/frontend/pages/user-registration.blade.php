@extends('frontend.master')
@section('contents')
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="padding-bottom: 20%">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ url('frontend/img/maxibo-logo.jpg') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{route('user.do.registration')}}" method="POST">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Registration</span>
                                        </div>

                                        <div class="form-outline">
                                            <input type="name" name="name" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Name</label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="email" name="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="phone" name="phone" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Phone Number</label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="password" name="password" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1">
                                            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">I have an account? <a
                                                href="{{route('user.login')}}" style="color: #393f81;">Login here</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection
