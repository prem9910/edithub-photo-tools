<?php
session_start();

include './header.php';

?>


<header class="p-8 bg-gray-50 pt-10 auto-h-screen text-center">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold leading-tight mb-4">Empower Your Creativity with EditHub</h1>
        <p class="text-lg mb-4">Transform your photos with ease using EditHub's versatile tools. From precise editing to seamless image downloads and conversions, we have the features you need.</p>
        
    </div>
</header>



<main class="container mx-auto my-8">

<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Photo Editor -->
    <div class="bg-white p-6 text-center  rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Photo Editor</h2>
        <p class="text-gray-600">Enhance and perfect your photos with our Photo Editor. Crop, resize, and apply filters to create stunning visuals.</p>
        <button class="mt-4 bg-orange-500 text-white py-2 px-4 rounded-full">Try it</button>
    </div>

    <!-- Image Downloader -->
    <div class="bg-white p-6 text-center rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Image Downloader</h2>
        <p class="text-gray-600">Download high-quality images easily. Our Image Downloader allows you to save images directly to your device with just a few clicks.</p>
        <button class="mt-4 bg-orange-500 text-white py-2 px-4 rounded-full">Try it</button>
    </div>

    <!-- Image Converter -->
    <div class="bg-white p-6 text-center rounded-lg shadow-md">
        <h2 class="text-xl font-semibold mb-4">Image Converter</h2>
        <p class="text-gray-600">Convert images to different formats effortlessly. Our Image Converter supports a variety of formats, ensuring compatibility for your needs.</p>
        <button class="mt-4 bg-orange-500 text-white py-2 px-4 rounded-full">Try it</button>
    </div>
</section>

</main>