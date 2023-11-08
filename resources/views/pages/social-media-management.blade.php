@extends('layouts.default')
@section('content')
    @include('partials.header-inner', ['inner_title' => 'Social Media Management'])

    <section>
        <h2 class="titulo-1 text-center mb-6">Photography</h2>
        <div class="gallery-main">

            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
                </a>
            </div>
            <div class="gallery-image grafico">
                <a href="{{ asset('storage/images/fotografia-1.jpg') }}" data-lightbox="imagen">
                    <img src="{{ asset('storage/images/fotografia-1.jpg') }}" alt="">
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
    @include('partials.contact-section')
@endsection
