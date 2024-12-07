@extends('layout.main-layout')

@section('content')
    <div class="container my-4">

        <section>
            <div class="text-center">
                <div class="d-flex justify-content-around">
                    <div>
                        <h2>About Us</h2>
                        <p>
                            Finance Center is devoted to aiding people, organizations, and financial backers explore the perplexing
                            universe of money. Whether you're hoping to oversee individual budgets, make more intelligent
                            speculations, or develop your business, we're here to give noteworthy bits of knowledge, apparatuses,
                            and assets. Our group comprises of experienced monetary experts, enthusiastic about making monetary
                            information open to everybody. We have confidence in enabling individuals through training and giving
                            clear, viable guidance that drives genuine outcomes.
                        </p>
                    </div>
                    <img class="rounded" src="{{ asset('assets/images/header-img.jpg') }}" alt="" width="400">
                </div>

            </div>
        </section>

    </div>
@endsection
