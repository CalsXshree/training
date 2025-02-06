{{-- <div id="head">
    <div class="bg-orange-50 text-orange-950 py-3 ">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('image/calsx-removebg-preview.png') }}" alt="CalsXshree.logo" class="h-20 w-20">
                <span class="ml-2 text-2xl font-mono">CalsXshree</span>
            </a>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-blue-700 font-mono text-xl font-light">Home</a></li>
                    <li><a href="/classes" class="hover:text-blue-700 font-mono text-xl font-light ">Classes</a></li>
                    <li><a href="/training" class="hover:text-blue-700 font-mono text-xl font-light">Training</a></li>
                    <li><a href="/services" class="hover:text-blue-700 font-mono text-xl font-light">Services</a></li>
                </ul>
            </nav>
            <div class="flex space-x-4">
                <a href="/joinus"
                    class=" font-extrabold border border-white bg-black  hover:bg-green-800 text-white px-4 py-2 rounded">Join
                    Now</a>
                <a href="/freepass"
                    class="  font-extrabold border border-orange-600 bg-black hover:bg-red-50 text-orange-500 px-4 py-2 rounded">Free
                    Pass</a>
            </div>
        </div>
    </div>
</div> --}}
<div id="head">
    <div class="bg-orange-50 text-orange-950 py-3">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/temp" class="flex items-center">
                <img src="{{ asset('image/calsx-removebg-preview.png') }}" alt="CalsXshree.logo" class="h-20 w-20">
            </a>

            <div class="block lg:hidden">
                <button id="menu" class="text-orange-950">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden lg:block">
                <ul class="flex space-x-4">
                    <li><a href="/temp" class="hover:text-blue-700 font-mono text-xl font-light">Home</a></li>
                    <li><a href="/classes" class="hover:text-blue-700 font-mono text-xl font-light">Classes</a></li>
                    <li><a href="/training" class="hover:text-blue-700 font-mono text-xl font-light">Training</a>
                    </li>
                    <li><a href="/services" class="hover:text-blue-700 font-mono text-xl font-light">Services</a>
                    </li>
                </ul>
            </nav>
            <div class="flex space-x-4">
                <a href="/joinus"
                    class="font-extrabold border border-white bg-black hover:bg-green-800 text-white px-4 py-2 rounded">Join
                    Now</a>
                <a href="/freepass"
                    class="font-extrabold border border-orange-600 bg-black hover:bg-red-50 text-orange-500 px-4 py-2 rounded">Free
                    Pass</a>
            </div>
        </div>
        <div id="mmenu" class="lg:hidden hidden bg-lime-500 py-5 px-5">
            <ul class="space-y-4 px-4">
                <li><a href="/temp" class="text-lg text-orange-950">Home</a></li>
                <li><a href="/classes" class=" text-lg text-orange-950">Classes</a></li>
                <li><a href="/training" class=" text-lg text-orange-950">Training</a></li>
                <li><a href="/services" class=" text-lg text-orange-950">Services</a></li>
            </ul>
        </div>
    </div>
</div>

{{-- <script>
    const menu = document.getElementById('menu');
    const mobileMenu = document.getElementById('mobile-menu');

    menu.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script> --}}
