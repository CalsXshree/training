<div
    class= "grid grid-rows-1 relative md:w-full h-[55rem] bg-no-repeat bg-cover bg-none md:bg-[url('/public/image/jumprope.webp')]">

    <div class="absolute inset-0 bg-gray-900 bg-opacity-30"></div>
    <div class="absolute  text-white">
        <div class="relative mt-44 ml-0 pt-32 pb-32 pl-10 pr-10 md:ml-36 sm:ml-36 rounded"
            style="background: url('https://media.istockphoto.com/id/922619002/photo/perfecting-his-form.jpg?s=1024x1024&w=is&k=20&c=o7Ifl0qvby0Flizl9yD8XmiOuSFWq52J7uUTObQvfxM=')">

            <ul>
                <p class="font-bold text-4xl"> Get a free day pass!</p>
                <strong> San Francisco residents. Proof of residency required.</strong>
                <form action="">
                    @csrf
                    <div class="flex flex-col bg-black mt-6 bg-transparent border-white text-black">
                        {{-- <label>Full Name</label> <br> --}} <br>
                        <input class="pb-2 pt-2" type="string" placeholder="Full Name" name="email" required>
                        {{-- <label>E-mail ID</label> <br> --}} <br>
                        <input class="pb-2 pt-2" type="email" placeholder="Email ID" name="name">
                        {{-- <label>Phone Number</label> <br> --}} <br>
                        <input class="pb-2 pt-2" type="text" placeholder="Phone Number" name="phone">

                        <button type="submit"
                            class="rounded-sm mt-8 mb-4 bg-green-500 text-white pt-2 pb-2">Next</button>
                    </div>
                </form>
                <div>
                    <span id="counter-display"> 167,543 people have requested a membership.</span>
                </div>
            </ul>
        </div>
    </div>
</div>
