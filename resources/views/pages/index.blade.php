@extends('layouts.default')
@section('content')
    <div class="text-jade-500 font-ubuntu flex justify-center items-center bg-neutral-600 h-[560px] w-full">
        VIDEO DE FONDO
    </div>
    <section>
        <div class="text-center">
            <h1 class="titulo-1">Are You Ready to Boost Your Business?</h1>
            <p class="mt-2">
                At Follower Media Group, we're geared up to drive your success in the digital realm.
                As your strategic partner, we offer comprehensive services to help you expand your
                online presence and reach a broader audience.
            </p>
            <p class="mt-2">
                From crafting custom websites that captivate your visitors to expertly managing your
                social media for increased interaction and engagement. Our expertise in photography
                and video delivers visually stunning content that compellingly narrates your story,
                while our talented graphic design team adds a unique creative touch.
            </p>
            <p class="mt-2">
                We're here to take your business to the next level in the digital world. Are you
                ready to boost your business? Join Follower Media Group today and let us build your
                online success together!
            </p>
            <button class="bg-cyan-600 text-white px-8 py-2 tracking-wide text-lg rounded mt-7">¡Llámanos!</button>
        </div>
        <div class="grid grid-cols-3 gap-7 mt-16">
            <img class="w-max" src="{{ asset('storage/images/follower-3.jpg') }}" alt="">
            <img class="w-full" src="{{ asset('storage/images/follower-4.jpg') }}" alt="">
            <img class="w-full" src="{{ asset('storage/images/follower-2.jpg') }}" alt="">
        </div>
    </section>
    <section class="bg-[#003176] text-white text-center">
        <h2 class="titulo-1">Nuestros Servicios</h2>
        <div class="grid grid-cols-4 gap-5">
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-400">
                    <i class="fa-solid fa-photo-film text-5xl"></i>
                </div>
                <p class="titulo-2">Fotografía & Video</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-400">
                    <i class="fa-regular fa-thumbs-up text-5xl"></i>
                </div>

                <p class="titulo-2">Administración de Redes Sociales</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-400">
                    <i class="fa-solid fa-palette text-5xl"></i>
                </div>

                <p class="titulo-2">Diseño Gráfico</p>
            </div>
            <div class="flex justify-start items-center flex-col">
                <div class="w-28 h-28 flex justify-center items-center rounded-full bg-cyan-400">
                    <i class="fa-solid fa-desktop text-5xl"></i>
                </div>

                <p class="titulo-2">Diseño Web</p>
            </div>
        </div>
        <button class="bg-amarillo-medio text-white px-8 py-2 tracking-wide text-lg rounded mt-7">¡Llámanos!</button>
    </section>
    <section>
        <h2 class="titulo-1 text-center mb-6">Our Portfolio</h2>
        <div class="gallery-main">
            <input type="radio" id="reset" checked="checked" name="color">
            <label for="reset">All</label>
            <input type="radio" id="bed" name="color">
            <label for="bed">Bed</label>
            <input type="radio" id="chair" name="color">
            <label for="chair">Chair</label>
            <input type="radio" id="sofa" name="color">
            <label for="sofa">Sofa</label>
            <div class="clr"></div>
            <div class="gallery-image bed">
                <img src="https://plus.unsplash.com/premium_photo-1689609950057-8d01c2542fd1?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YmVkfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image bed">
                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmVkfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image bed">
                <img src="https://images.unsplash.com/flagged/photo-1556438758-8d49568ce18e?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8YmVkfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image bed">
                <img src="https://images.unsplash.com/photo-1592229505678-cf99a9908e03?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJlZHxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="gallery-image chair">
                <img src="https://plus.unsplash.com/premium_photo-1673014201385-115f57893c99?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2hhaXJ8ZW58MHx8MHx8fDA%3D" alt="">
            </div>
            <div class="gallery-image chair">
                <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGNoYWlyfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image chair">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGNoYWlyfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image chair">
                <img src="https://images.unsplash.com/photo-1617582907226-c49e2d8200d9?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGNoYWlyfGVufDB8fDB8fHww" alt="">
            </div>
            <div class="gallery-image sofa">
                <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c29mYXxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="gallery-image sofa">
                <img src="https://plus.unsplash.com/premium_photo-1661765778256-169bf5e561a6?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c29mYXxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="gallery-image sofa">
                <img src="https://images.unsplash.com/photo-1540574163026-643ea20ade25?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c29mYXxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="gallery-image sofa">
                <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8c29mYXxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
        </div>
    </section>
    <section>
        @include('partials.call-to-action')
    </section>
@endsection
