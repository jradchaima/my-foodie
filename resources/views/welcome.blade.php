@extends('layouts.master')
@section('content')
<!-- component -->

      
   
      <!-- section end -->
      
      <div class="section bg-image flex  h-screen text-gray-800">
        <div class="hero bg-gray-200 text-center grid md:grid-cols-2 border w-4/6 m-auto p-8 bg-opacity-90 rounded-lg">
          <img class="icon m-auto rounded-lg" src="{{ URL::to('assets/img/landing.jpg') }}" alt="" />
          <div class="text m-auto text-lg md:ml-5 p-5 md:text-left">
            <div class="head text-3xl mb-3 font-semibold">Why Choose Foodi ?</div>
            <div class="desc hidden lg:block">Foodi is an intuitive and user-friendly restaurant reservation platform designed to streamline the dining experience for customers and restaurant owners alike. The platform offers a seamless way for users to discover.</div>
          </div>
          <div class ="flex flex-col items-center justify-center mt-2">
        <x-custom-button>{{ __('Make Reservation') }}</x-custom-button>
       </div>
</div>

        </div>
       
      </div>
   
      <!-- section end -->
     
    
      <!-- section end -->
      <div id="menu"class="heading_section italic  font-semibold text-3xl text-center p-5">Our Menu</div>
      <div class="section cards mx-auto border grid md:grid-cols-3 md:px-12 bg-gray-200 text-gray-800">

        <div class="card text-sm shadow-lg max-w-sm m-5 mx-auto sm:mx-auto md:m-5 overflow-hidden flex flex-col rounded">
          <div class="img"><img class="w-full h-full" src="https://static.toiimg.com/thumb/76481989.cms?width=680&height=512&imgsize=170646" alt="" /></div>
          <div class="text p-5 pt-2 text-center">
            <div class="title font-semibold my-2 text-xl text-red-700">Pepperoni</div>
            <div class="desc">A classic. Just throw a few (or a ton of) slices of pepperoni on top of the cheese, and you’ll soon have a greasy, slightly spicy and delicious pizza that you simply can’t go wrong with.</div>
          </div>
        </div>
        <!-- eachcard -->
        <div class="card text-sm shadow-lg max-w-sm m-5 mx-auto sm:mx-auto md:m-5 overflow-hidden flex flex-col rounded">
          <div class="img"><img class="w-full h-full" src="https://static.toiimg.com/thumb/76481989.cms?width=680&height=512&imgsize=170646" alt="" /></div>
          <div class="text p-5 pt-2 text-center">
            <div class="title font-semibold my-2 text-xl text-red-700">Pepperoni</div>
            <div class="desc">A classic. Just throw a few (or a ton of) slices of pepperoni on top of the cheese, and you’ll soon have a greasy, slightly spicy and delicious pizza that you simply can’t go wrong with.</div>
          </div>
        </div>
        <!-- eachcard -->
        <div class="card text-sm shadow-lg max-w-sm m-5 mx-auto sm:mx-auto md:m-5 overflow-hidden flex flex-col rounded">
          <div class="img"><img class="w-full h-full" src="https://static.toiimg.com/thumb/76481989.cms?width=680&height=512&imgsize=170646" alt="" /></div>
          <div class="text p-5 pt-2 text-center">
            <div class="title font-semibold my-2 text-xl text-red-700">Pepperoni</div>
            <div class="desc">A classic. Just throw a few (or a ton of) slices of pepperoni on top of the cheese, and you’ll soon have a greasy, slightly spicy and delicious pizza that you simply can’t go wrong with.</div>
          </div>
        </div>
        <!-- eachcard -->
  

      </div>
      <!-- section end -->
   
      <div class="section py-28 w-full scree border grid md:grid-cols-2 bg-gray-200 text-gray-800">
        <div class="subsec flex-none overflow-hidden max-h-96">
          <img class="w-full" src="{{ URL::to('assets/img/resto.jpg') }}"alt="" />
        </div>
        <div class="subsec my-auto p-8">
          <div class="title font-semibold text-3xl mb-5">What is Foodie?</div>
          <div class="desc text-lg">
"Foodie" is a trendy and vibrant restaurant concept focused on gourmet experiences. Here’s how the restaurant reservation might be described:

Restaurant Name: Foodie

Ambiance: A chic, modern eatery featuring a minimalist yet cozy design. Warm lighting, wooden accents, and artistic decor make it perfect for food enthusiasts. The space is lively yet relaxed, balancing upscale dining with a casual atmosphere.

Cuisine: Eclectic, farm-to-table menus offering a fusion of international and local flavors

Specialties: Signature tasting menus, artisanal cocktails.
</div>
        </div>
      </div>
      <!-- section end -->

      <div class="heading_section bg-red-600 text-gray-300">
        <div class="footer w-5/6 mx-auto text-center">
          <div class="sub flex-1 p-8">
            <div class="text-3xl mb-3 uppercase">Contact Us</div>
            <div class="info">
              <div class="name">Foodie</div>
              <div class="name text-sm">
                Street 4996 Brown Bear Drive <br> 
                City Mira Loma State CA State Full California <br>
                Zip Code 91752 <br>
                Phone Number 951-634-4557 <br>
                Mobile Number 951-903-8940
              </div>
            </div>
          </div>
          <div class="sub flex p-5 w-5/6 mx-auto border-t">
            <div class="cursor-pointer hover:underline items mx-auto">Our Parterners</div>
            <div class="cursor-pointer hover:underline items mx-auto">Policy</div>
            <div class="cursor-pointer hover:underline items mx-auto">Facilities</div>
            <div class="cursor-pointer hover:underline items mx-auto">Developer</div>
          </div>
        </div>
      </div>
      <!-- section end -->


      <!-- gap filling for preview bottom overlay -->
      <div class="filling pt-14"></div>
@endsection