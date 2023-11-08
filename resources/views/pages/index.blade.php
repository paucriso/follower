@extends('layouts.default')
@section('content')
    <div>
        <video style='width:100%;' id="background_video" autoplay loop muted>
            <source type='video/mp4' src='{{ asset('storage/images/video-follower.m4v') }}' />
        </video>
        <div id="overlay"></div>
    </div>
    <section>
        <img class="mx-auto max-w-[260px] mb-10" src="{{ asset('storage/images/logo-transparente.png') }}" alt="">
        <div class="grid grid-cols-2">
            <div>
                <h1 class="titulo-1">Are You Ready to Boost Your Business?</h1>
                <p class="mt-2 text-justify">
                    At <strong>Follower Media Group</strong>, we're geared up to drive your success in the digital realm.
                    As your strategic partner, we offer comprehensive services to help you expand your
                    online presence and reach a broader audience.
                </p>
                <p class="mt-2 text-justify">
                    From crafting custom <strong>websites</strong> that captivate your visitors to expertly managing your
                    <strong>social media</strong> for increased interaction and engagement. Our expertise in
                    <strong>photography and video</strong>
                    delivers visually stunning content that compellingly narrates your story,
                    while our talented <strong>graphic design</strong> team adds a unique creative touch.
                </p>
                <p class="mt-2 text-justify">
                    We're here to take <strong>your business to the next level</strong> in the digital world. Are you
                    ready to boost your business? Join Follower Media Group today and let us build your
                    online success together!
                </p>
                <button class="bg-cyan-600 text-white px-8 py-2 tracking-wide text-lg rounded mt-7">Call Us Now!</button>
            </div>
            <div class="flex justify-center items-center">
                <img class="max-w-[340px]" src="{{ asset('storage/images/boost.png') }}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-3 gap-7 mt-16">
            <img class="w-max" src="{{ asset('storage/images/follower-3.jpg') }}" alt="">
            <img class="w-full" src="{{ asset('storage/images/follower-4.jpg') }}" alt="">
            <img class="w-full" src="{{ asset('storage/images/follower-2.jpg') }}" alt="">
        </div>
    </section>
    <section class="bg-[#003176] text-white text-center">
        <h2 class="titulo-1 mb-10">Our Services</h2>
        <div class="grid grid-cols-4 gap-5">
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-600">
                    <i class="fa-solid fa-photo-film text-5xl"></i>
                </div>
                <p class="titulo-2">Photography & Video</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-600">
                    <i class="fa-regular fa-thumbs-up text-5xl"></i>
                </div>

                <p class="titulo-2">Social Media Management</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-600">
                    <i class="fa-solid fa-palette text-5xl"></i>
                </div>

                <p class="titulo-2">Graphic Design</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-600">
                    <i class="fa-solid fa-desktop text-5xl"></i>
                </div>

                <p class="titulo-2">Web Design</p>
            </div>
        </div>
        <button class="bg-amarillo-medio text-white px-8 py-2 tracking-wide text-lg rounded mt-16">Call Us Now!</button>
    </section>
    <section>
        <h2 class="titulo-1 text-center mb-6">Some Of Our Work</h2>
        <div class="gallery-main">
            <input type="radio" id="reset" checked="checked" name="color">
            <label for="reset">All</label>
            <input type="radio" id="grafico" name="color">
            <label for="grafico">Graphic Design</label>
            <input type="radio" id="redes" name="color">
            <label for="redes">Social Media Management</label>
            <input type="radio" id="fotografia" name="color">
            <label for="fotografia">Photography</label>
            <input type="radio" id="web" name="color">
            <label for="web">Web Design</label>
            <div class="clr"></div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/grafico-1.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/grafico-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/grafico-2.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/grafico-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/grafico-3.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/grafico-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/grafico-4.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/grafico-4.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/grafico-5.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/grafico-5.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image redes">
                <a href="{{ asset('storage/images/redes-1.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/redes-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image redes">
                <a href="{{ asset('storage/images/redes-2.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/redes-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image redes">
                <a href="{{ asset('storage/images/redes-3.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/redes-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image redes">
                <a href="{{ asset('storage/images/redes-4.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/redes-4.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image fotografia">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image fotografia">
                <a href="{{ asset('storage/images/fotografia-2.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/fotografia-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image fotografia">
                <a href="{{ asset('storage/images/fotografia-3.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/fotografia-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image web">
                <a href="{{ asset('storage/images/web-1.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/web-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image web">
                <a href="{{ asset('storage/images/web-2.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/web-2.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image web">
                <a href="{{ asset('storage/images/web-3.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/web-3.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image web">
                <a href="{{ asset('storage/images/web-4.jpg') }}" data-lightbox="image-1">
                    <img src="{{ asset('storage/images/web-4.jpg') }}" alt="">
                </a>
            </div>
        </div>
        <h2 class="titulo-1 text-center mb-6 clear-both pt-10">Video</h2>
        <div class="grid grid-cols-2 gap-5">
            <div><iframe class="w-full min-h-[280px]" src="https://www.youtube.com/embed/VlttzhXJ9Sw?si=g8NZmZRcz_7w7Yog"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div><iframe class="w-full min-h-[280px]" src="https://www.youtube.com/embed/F-n_KcysNJM?si=69F1c3pkZExFk50f"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div><iframe class="w-full min-h-[280px]" src="https://www.youtube.com/embed/tGtjAeTmyQg?si=DwZmUuX_r1yxN1Yu"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
            <div><iframe class="w-full min-h-[280px]" src="https://www.youtube.com/embed/SIT7axYB68Q?si=o9skQv6ZmwuiLv3s"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe></div>
        </div>
    </section>
    <section>
        @include('partials.call-to-action')
    </section>
    @include('partials.contact-section')
@endsection
