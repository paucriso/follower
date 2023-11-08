<div class="mx-auto px-24 bg-[#1b4695] h-10 flex justify-end items-center text-white">
    <div>
        <i class="fa-solid fa-phone"></i>
        <span>
            (646) 509-9436
        </span>
    </div>

</div>
<div class="bg-[#0a1845] text-white" x-data="{open: false}">
    <div class="mx-auto h-24 px-24 flex justify-between items-center">
        <a href="#">
            <img class="max-w-[200px]" src="{{ asset('storage/images/logo-alt.webp') }}" alt="Follower Media Group">
        </a>
        <nav class="uppercase font-ubuntu">
            <a class="mr-5 {{ request()->is('/') ? 'text-yellow-300' : '' }}" href="{{ route('pages.index') }}">Home</a>
            <a class="mr-5 {{ request()->is('photography-and-video') ? 'text-yellow-300' : '' }}"
                href="{{ route('pages.photography') }}">Photography & Video</a>
            <a class="mr-5 {{ request()->is('social-media-management') ? 'text-yellow-300' : '' }}"
                href="{{ route('pages.social') }}">Social Media Management</a>
            <a class="mr-5 {{ request()->is('graphic-design') ? 'text-yellow-300' : '' }}"
                href="{{ route('pages.graphic') }}">Graphic Design</a>
            <a class="{{ request()->is('web-design') ? 'text-yellow-300' : '' }}" href="{{ route('pages.web') }}">Web
                Design</a>
        </nav>
        <div class="lg:hidden" >
            <button x-on:click="open = !open">
                <template x-if="!open"><i class="text-3xl text-verde-600 fa-solid fa-bars"></i></template>
                <template x-if="open"><i class="text-3xl text-verde-600 fa-solid fa-xmark"></i></template>
            </button>
            <div x-show="open" x-on:click.away="open = false" x-cloak
                 class="bg-cyan-600 absolute left-0 top-0 h-full overflow-hidden bg-verde-900 text-white z-10
                        flex justify-center items-start pt-24 text-center w-2/3"

            >
                <ul class="text-2xl">
                    <li class="mb-12 hover:text-yellow-400">
                        <a href="{{route('pages.index')}}">
                            Home
                        </a>
                    </li>
                    <li class="mb-12 hover:text-yellow-400">
                        <a href="{{route('pages.photography')}}">
                            Photography & Video
                        </a>
                    </li>
                    <li class="mb-12 hover:text-yellow-400">
                        <a href="{{route('pages.social')}}">
                            Social Media Management
                        </a>
                    </li>
                    <li class="mb-12 hover:text-yellow-400">
                        <a href="{{route('pages.graphic')}}">
                            Graphic Design
                        </a>
                    </li>
                    <li class="hover:text-yellow-400">
                        <a href="{{route('pages.web')}}">
                            Web Design
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

