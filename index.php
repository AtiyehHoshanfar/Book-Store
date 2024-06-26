<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./vendor/all.min.css">
    <link rel="stylesheet" href="./vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="./public/build/style.scss">
    <link rel="stylesheet" href="./public/build/style.css">
    <title>BOOK App</title>
  </head>
  <body class="bg-purple-200">
<!-- ! Hero Section  -->
<div class="hero-section h-screen w-full relative mb-8">
  <div class="p-4 md:px-24 md:py-8 flex ">
    <a href="http://localhost:8080/book_Store/signup.html" id="profile" class="bg-white z-10 mx-1 w-10 cursor-pointer h-10 md:w-12 md:h-12 shadow rounded-full flex items-center justify-center"><i class="fa-regular fa-user text-purple-500 text-xl pointer-events-none"></i></a>
    <a href="http://localhost:8080/book_Store/signup.html" id="cart" class="bg-white z-10 mx-1 cursor-pointer w-10 h-10 md:w-12 md:h-12 shadow rounded-full flex items-center justify-center"><i class="fa-solid fa-basket-shopping text-purple-500 text-xl pointer-events-none"></i></a>
    <button  id="favorite" class="bg-white mx-1 z-10 w-10 cursor-pointer h-10 md:w-12 md:h-12 shadow rounded-full flex items-center justify-center"><i class="fa-regular fa-heart text-purple-500 text-xl pointer-events-none"></i></button>
    <!-- <a href="http://localhost:8080/book_Store/signup.php" id="search" class="bg-white z-10 mx-1 w-10 cursor-pointer h-10 md:w-12 md:h-12 shadow rounded-full flex items-center justify-center "><i class="fa-solid fa-magnifying-glass text-purple-500 text-xl pointer-events-none"></i></a> -->
  
  </div>
<div class="flex h-screen md:justify-center justify-end  flex-col px-4 md:px-24 absolute bottom-10">
  <h1 class="text-white  text-3xl md:text-6xl font-bold mb-4">Read a Book for <br/> Open your mind</h1>
  <h2 class="text-slate-300  md:text-xl md:max-w-[440px] font-medium mb-4 ">Books are the quietest and most constant of friends they are the most accessible and wisest of counselors and the most patient of teachers.</h2>
  <button class="bg-orange-500 rounded-full px-4 py-2 md:py-[12px] text-white max-w-40 md:max-w-60 shadow-lg mb-8">Read More</button>
</div>
</div>
<!-- ! BODY -->
<div class="container mx-auto p-4">
  <!-- ! Most Popular Section -->
  <section class="mb-12  ">
    <h2 class="text-purple-900 text-3xl md:text-4xl font-bold mb-2"> Most Popular Books</h2>
    <div class="swiper mySwiper ">
      <div class="swiper-wrapper">
    <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (1).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div>
    <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (2).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (3).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (4).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf.webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div>
      <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (1).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (2).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (2).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (1).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (3).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (1).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div> 
     <div  class="swiper-slide wrapper w-full h-80 relative sm:m-2">
      <!-- ? front card -->
      <div  class="card front-face absolute w-full h-full  bg-white rounded-xl translate-y-0">
        <img
          src="public/images/books/lf (4).webp" class="rounded-xl w-full h-full object-fill">
        </div>
    <!-- ? back card  -->
        <div class="card back-face flex items-center  flex-col p-2  absolute w-full h-full bg-white  rounded-xl">
        <div class="info flex justify-center flex-col p-2 relative   w-full h-full">
          <div>
            <!-- ? book title -->
            <div class="title text-purple-900 font-bold text-2xl">The Dixon Rule </div>
            <!-- ? book author -->
            <p class="text-purple-600 font-medium text-md">Elle Kennedy </p>
          </div>
          <button class=" p-2 absolute w-full  bottom-0 right-0  rounded-md bg-purple-500 text-white ">Add To Cart</button>
          <button class="w-10 h-10 rounded-full absolute top-0 right-0 bg-red-50">❤️</button>
        </div>
    
      </div>
    
    </div>
  </div>
  </div>
  </section>

<!-- ! Book Categories -->
<section >
  <ul class="flex overflow-x-auto scrollbar-nav scrollbar  justify-center mb-4 py-4">
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">History</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Biography</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Fiction</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Horro</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Science</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Travel</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Business</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Cook Book</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Diet , Health & Fitness</li>
    <li class="px-8 py-2 md:py-3 cursor-pointer text-lg rounded-md text-purple-950 bg-purple-500 m-1 text-nowrap ">Religion</li>
  </ul>
</section>


<!-- ! Fiter Book Mobile -->
<section class=" md:hidden">
  <div class="mobile-filter w-full rounded-lg flex mb-1 justify-center cursor-pointer transition-all bg-white py-2 text-purple-900 "> Filter Book </div>
<div class="mobile-filter-container bg-white p-2 z-10 rounded-lg shadow">
  <!-- ? price -->
<div class="flex  flex-col mb-2">
  <label for="price" class="mb-1 text-purple-950">Price</label>
<input type="range" name="price" id="price">
</div>
<!-- ? age -->
<div class="flex  flex-col mb-2 ">
  <label for="age" class="mb-1 text-purple-950">Age</label>
<div class="flex items-center ">
  <input type="radio" name="age" id="0-4" class="form-radio checked:ring-purple-600 text-purple-600" >
  <label for="0-4" class="mb-1 ml-2 text-purple-950">0-4 Years</label>
</div>
<div class="flex items-center ">
  <input type="radio" name="age" id="3-5" class="form-radio checked:ring-purple-600 text-purple-600" >
  <label for="3-5" class="mb-1 ml-2 text-purple-950">3-5 Years</label>
</div><div class="flex items-center ">
  <input type="radio" name="age" id="6-8" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="6-8" class="mb-1 ml-2 text-purple-950">6-8 Years</label>
</div><div class="flex items-center ">
  <input type="radio" name="age" id="9-12" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="9-12" class="mb-1 ml-2 text-purple-950">9-12 Years</label>
</div><div class="flex items-center ">
  <input type="radio" name="age" id="teen" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="teen" class="mb-1 ml-2 text-purple-950">teen</label>
</div>
</div>
<!-- ? SPECIAL COLLECTIONS -->
<div class="flex  flex-col mb-2 ">
  <label for="Collections" class="mb-1 text-purple-950">Special Collections </label>
<div class="flex items-center ">
  <input type="radio" name="Collections" id="History" class="form-radio checked:ring-purple-600 text-purple-600" >
  <label for="History" class="mb-1 ml-2 text-purple-950">History</label>
</div>
<div class="flex items-center ">
  <input type="radio" name="Collections" id="Business" class="form-radio checked:ring-purple-600 text-purple-600" >
  <label for="Business" class="mb-1 ml-2 text-purple-950">Business</label>
</div><div class="flex items-center ">
  <input type="radio" name="Collections" id="Science" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="Science" class="mb-1 ml-2 text-purple-950">Science</label>
</div><div class="flex items-center ">
  <input type="radio" name="Collections" id="Novel" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="Novel" class="mb-1 ml-2 text-purple-950">Novel</label>
</div><div class="flex items-center ">
  <input type="radio" name="Collections" id="Fiction" class="form-radio checked:ring-purple-600 text-purple-600">
  <label for="Fiction" class="mb-1 ml-2 text-purple-950">Fiction</label>
</div>
</div>
</div>
</section>
<!-- ! main content of page -->
<section class="mb-12 w-full md:flex">
<!-- ! filter desktop -->

  <div class="m-2 w-56 "> 
    <div class=" bg-white p-2 z-10  rounded-lg hidden md:block  shadow   ">
      <!-- ? price -->
    <div class="flex  flex-col mb-2">
      <label for="price" class="mb-1 text-purple-950">Price</label>
    <input type="range" name="price" id="price">
    </div>
    <!-- ? age -->
    <div class="flex  flex-col mb-2 ">
      <label for="age" class="mb-1 text-purple-950">Age</label>
    <div class="flex items-center ">
      <input type="radio" name="age" id="0-4" class="form-radio checked:ring-purple-600 text-purple-600" >
      <label for="0-4" class="mb-1 ml-2 text-purple-950">0-4 Years</label>
    </div>
    <div class="flex items-center ">
      <input type="radio" name="age" id="3-5" class="form-radio checked:ring-purple-600 text-purple-600" >
      <label for="3-5" class="mb-1 ml-2 text-purple-950">3-5 Years</label>
    </div><div class="flex items-center ">
      <input type="radio" name="age" id="6-8" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="6-8" class="mb-1 ml-2 text-purple-950">6-8 Years</label>
    </div><div class="flex items-center ">
      <input type="radio" name="age" id="9-12" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="9-12" class="mb-1 ml-2 text-purple-950">9-12 Years</label>
    </div><div class="flex items-center ">
      <input type="radio" name="age" id="teen" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="teen" class="mb-1 ml-2 text-purple-950">teen</label>
    </div>
    </div>
    <!-- ? SPECIAL COLLECTIONS -->
    <div class="flex  flex-col mb-2 ">
      <label for="Collections" class="mb-1 text-purple-950">Special Collections </label>
    <div class="flex items-center ">
      <input type="radio" name="Collections" id="History" class="form-radio checked:ring-purple-600 text-purple-600" >
      <label for="History" class="mb-1 ml-2 text-purple-950">History</label>
    </div>
    <div class="flex items-center ">
      <input type="radio" name="Collections" id="Business" class="form-radio checked:ring-purple-600 text-purple-600" >
      <label for="Business" class="mb-1 ml-2 text-purple-950">Business</label>
    </div><div class="flex items-center ">
      <input type="radio" name="Collections" id="Science" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="Science" class="mb-1 ml-2 text-purple-950">Science</label>
    </div><div class="flex items-center ">
      <input type="radio" name="Collections" id="Novel" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="Novel" class="mb-1 ml-2 text-purple-950">Novel</label>
    </div><div class="flex items-center ">
      <input type="radio" name="Collections" id="Fiction" class="form-radio checked:ring-purple-600 text-purple-600">
      <label for="Fiction" class="mb-1 ml-2 text-purple-950">Fiction</label>
    </div>
    </div>
    </div>
</div>
<!-- ! Card Book container -->

<div  class="card-container flex flex-col w-full  md:grid md:grid-cols-[repeat(auto-fit,minmax(224px,1fr))] ">





<?php
$connect = mysqli_connect("localhost", "root", "", "book_store");
$sql="select * from book";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
while($row=mysqli_fetch_array($result)) {
    echo "<div class='mt-12 md:m-2'>";
    echo "<div class='bg-white rounded-lg shadow p-2 relative mx-auto'>";
    echo "<div class='relative'>";
    echo "<img class='-mt-12 top-12 w-full h-60 rounded-md' src='./public/images/books/lf (1).webp' alt='book image'>";
    echo "<div class='p-1'>";
    echo "<div class='flex justify-between'>";
    echo "<div class='flex flex-col mb-4'>";
    echo "<h2 class='text-purple-900 md:text-xl'>" . $row['Book_Name'] . "</h2>";
    echo "<h3 class='text-purple-600 md:text-lg'>" . $row['Author_Name'] . "</h3>";
    echo "</div>";
    echo "<span class='text-purple-900 md:text-md'>" . $row['Score'] . "⭐</span>";
    echo "</div>";
    echo "<div class='flex items-center justify-between'>";
    echo "<span class='text-purple-600 md:text-lg'>" . $row['Price'] . ".00$</span>";
    echo "<button class='bg-purple-600 text-white px-6 py-2 rounded-md'>Add To Cart</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

mysqli_close($connect);
?>

    </div>

</section>



</div>



<!-- ! favorite modal  -->
<div class="hidden" id="modal" >
  <div id="backdrop" class="fixed inset-0  z-50 w-full h-screen bg-slate-300 bg-opacity-70 "></div>
  <div class="absolute top-1/3 flex flex-col  p-4 rounded-lg items-center translate-x-1/2 right-1/2 w-4/5 bg-white z-[1000]">
            <!-- ! favorite item -->
            <div class="flex h-28 md:h-32 w-full  p-2 mb-2 bg-purple-100 rounded-md">
              <img
                class="aspect-square rounded-md w-24 md:w-32"
                src="/public/images/books/lf (1).webp"
                alt="book item"
              />
              <!-- ? Content -->
              <div class="ml-2 w-full">
                <!-- ? header -->
                <div class="flex justify-between items-start mb-4">
                  <div class="flex flex-col">
                    <h2 class="text-purple-800 font-bold text-lg md:text-2xl">Book Title</h2>
                    <h3 class="text-purple-500 font-light text-md md:text-lg">Book Author</h3>
                  </div>
                  <button class="p-2 text-red-500">X</button>
                </div>
                  <span class="text-purple-600 text-lg md:text-xl6">34.00$</span>
              </div>
            </div>
                        <!-- ! favorite item -->
                        <div class="flex h-28 md:h-32 w-full  p-2 mb-2 bg-purple-100 rounded-md">
                          <img
                            class="aspect-square rounded-md w-24 md:w-32"
                            src="/public/images/books/lf (1).webp"
                            alt="book item"
                          />
                          <!-- ? Content -->
                          <div class="ml-2 w-full">
                            <!-- ? header -->
                            <div class="flex justify-between items-start mb-4">
                              <div class="flex flex-col">
                                <h2 class="text-purple-800 font-bold text-lg md:text-2xl">Book Title</h2>
                                <h3 class="text-purple-500 font-light text-md md:text-lg">Book Author</h3>
                              </div>
                              <button class="p-2 text-red-500">X</button>
                            </div>
                              <span class="text-purple-600 text-lg md:text-xl6">34.00$</span>
                          </div>
                        </div>
  </div>
</div>
 <script src="./vendor/all.min.js"></script>
<script src="./vendor/swiper-bundle.min.js"></script>
    <script  src="/main.js"></script>
  </body>
</html>




