@extends('layouts.master')
@section('title')
    FAQ
@endsection
@section('content')
    <!-- Slider Area Start -->
    <section class="slider-area gallery-slider-area">
        <div class="sliderr">
            <div class="single-slide" style="background-image:url({{asset('public/assets/img/slider/slide-1.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-table">
                                <div class="slide-tablecell">
                                    <h2>Faq</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area End -->
    <!-- FAQ AREA START -->
    <section class="faq-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion my-accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Faq 1<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menuone" class="collapse show">
                                <div class="card-body">
                                    <p> Q: Do you deliver every image you shoot? <br/>Projector<br/>
                                        A: No, we do not. We eliminate duplicate images, test shots, missed focused shots, shots with bad expressions and other images that may dilute the overall product delivery. For example, because we shoot with low apertures, sometimes we take a few extra shots to make sure we have the perfect focus. We don’t expect you to have the expertise or the time to zoom into each image to select the one with the sharpest focus, so we spend hours doing that on our end. In another example, candid laughs and emotional tears are some of the best images from the day. Unfortunately, they can also yield some unflattering facial expressions. We might snap a few extras of any of these moments to make sure we have a great shot with the ideal expression for the moment. With our expertise of processing millions of images each year, we may eliminate ones that we feel are duplicates and only deliver the best one.</p>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Faq 2<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menutwo" class="collapse">
                                <div class="card-body">
                                    <p> Q: Have you shot at my venue before? <br/>Projector<br/>
                                        A: We have shot at hundreds of venues, so there is a good chance that we have. However, if we have not, we will get to the venue early on the day of and be sure to perform a thorough walk-through to scout out the best photography locations. We also do extensive online research prior to your big day!</p>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Faq 3<span class="collapsed"><p><b>></b></p></span>
                                    <span class="expanded"><p><b><</b></p></span></a>
                            </div>
                            <div id="menu3" class="collapse">
                                <div class="card-body">
                                    <p> Q: Does your studio provide videography services? <br/>Projector<br/>
                                        A: Yes.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="progress-barr pt-100">
                        <div class="container">
                            <h2>Our Skill</h2>
                            <div class="row text-center">
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="77">
                                            <strong></strong>
                                            <span>Cinematography</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="55">
                                            <strong></strong>
                                            <span>Drone</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="progressbar">
                                        <div class="second circle" data-percent="100">
                                            <strong></strong>
                                            <span>Photography</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection