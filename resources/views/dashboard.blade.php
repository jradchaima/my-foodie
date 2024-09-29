<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="section bg-image flex overflow-hidden h-screen text-gray-800">
        <div class="hero bg-gray-200 text-center grid md:grid-cols-2 border w-4/6 m-auto p-8 bg-opacity-90 rounded-lg">
          <img class="icon m-auto rounded-lg" src="https://static.cms.yp.ca/ecms/media/1/11042220_lel-1444925848-600x360.jpg" alt="" />
          <div class="text m-auto text-lg md:ml-5 p-5 md:text-left">
            <div class="head text-3xl mb-3 font-semibold">Why We Love Pizza ?</div>
            <div class="desc">There's a reason pizza is so popular. Humans are drawn to foods that are fatty, sweet, rich and complex. Pizza has all of these components. Cheese is fatty, meat toppings tend to be rich and the sauce is sweet.</div>
          </div>
        </div>
      </div>
      <!-- section end -->
      
      <div class="heading_section italic bg-gray-200 font-semibold text-3xl text-center p-5 pt-24 text-gray-800">Some Well Known Pizza Styles</div>
      <!-- section end -->
      
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
          <img class="w-full" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/delish-keto-pizza-073-1544039876.jpg?crop=0.668xw:1.00xh;0.233xw,0.00255xh&resize=980:*" alt="" />
        </div>
        <div class="subsec my-auto p-8">
          <div class="title font-semibold text-3xl mb-5">What is paleo pizza crust made out of?</div>
          <div class="desc text-lg">We've seen it all kinds of ways, with different types of flours, but we settled on almond flour for its nutty flavor. We also mix in spices—Italian seasoning and garlic powder—to give it more flavor. We skip yeast because it can be a pain and instead incorporate eggs and olive oil. The eggs help make the crust fluffy.</div>
        </div>
      </div>
      <!-- section end -->

      <div class="heading_section bg-red-600 text-gray-300">
        <div class="footer w-5/6 mx-auto text-center">
          <div class="sub flex-1 p-8">
            <div class="text-3xl mb-3 uppercase">Contact Us</div>
            <div class="info">
              <div class="name">Pizza Parlour</div>
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

</x-app-layout>
