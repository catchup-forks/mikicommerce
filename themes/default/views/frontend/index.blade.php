@extends('default::layout.layout')

@section('content')
        <!-- page content -->
<main id="adds" class="page-content no-bottom-padding">
    <!-- post1 -->
    <section id="post1" class="page-content">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInLeft animated" data-wow-duration="1s">Post1<span class="colored"> For the Post1 stylish.</span></h1>
                    <p class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">Sub Text Post1</p>
                </div>
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInLeft animated iphone" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s" src="{{ Theme::asset('default::pic/slider/iphone.png') }}">
                        <img class="wow fadeInRight animated ipad" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s" src="{{ Theme::asset('default::pic/slider/ipad.png') }} ">
                        <img class="wow fadeInRight animated ipad-shadow" alt="" data-wow-duration="0.5s" data-wow-delay="0.2s" src="{{ Theme::asset('default::pic/slider/ipad-shadow.png') }} ">
                        <img class="wow fadeIn animated macbook" alt="" data-wow-duration="1.0s" src="{{ Theme::asset('default::pic/slider/slide-1-image.jpg') }} ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /post1 -->
    <!-- post2 -->
    <section id="post2" class="page-content-alt">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeIn animated ipad" alt="" data-wow-duration="0.7s" data-wow-delay="0.3s" src="{{ Theme::asset('default::pic/slider/2post/home-left-right-image-1.png') }}">
                    </div>
                </div>
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInRight animated" data-wow-duration="1s">A post2<span class="colored"> in Shirting</span></h1>
                    <p class="wow fadeInRight animated" data-wow-delay="0.3s" data-wow-duration="1s">Sub Text Post2</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /post2 -->
    <!-- post3 -->
    <section id="post3" class="page-content">
        <div class="grid-row composer">
            <div class="columns-row">
                <div class="columns-col columns-col-6">
                    <h1 class="wow fadeInLeft animated" data-wow-duration="1s">Classic <br/> <span class="colored">post3 Options</span></h1>
                    <p class="wow fadeInLeft animated" data-wow-delay="0.3s" data-wow-duration="1s">Sub Text post3</p>
                </div>
                <div class="columns-col columns-col-6">
                    <div class="wysiwyg picture-cont">
                        <img class="wow fadeInRight animated window-1" alt="" data-wow-delay="0.3s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/3post/slide1.jpg') }}">
                        <img class="wow fadeInRight animated window-2" alt="" data-wow-delay="0.6s" data-wow-duration="0.5s" src="{{ Theme::asset('default::pic/slider/3post/slide2.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /post3 -->
</main>
@endsection