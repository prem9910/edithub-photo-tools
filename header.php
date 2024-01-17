<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditHub</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.8.1/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="stylesheet" href="./includes/css/style.css">
    <!-- <link rel="stylesheet" href="./includes/css/custom.css"> -->
    
</head>
<body>
    <!-- Slider Component Container -->
    <div class="flex flex-col items-center justify-center mt-32" x-cloak x-data="appData()" x-init="appInit()">
        <div class="flex flex-col ">
            <!-- Page Scroll Progress -->
            <div class="fixed inset-x-0 top-0 z-50 h-0.5 mt-0.5
            bg-blue-500" :style="`width: ${percent}%`"></div>

            <!-- Navbar -->
            <nav class="flex justify-around py-4 bg-white/80
            backdrop-blur-md shadow-md w-full
            fixed top-0 left-0 right-0 z-10">

                <!-- Logo Container -->
                <div class="flex items-center">
                    <!-- Logo -->
                    <a href="./index.php" class="cursor-pointer">
                        <h3 class="text-2xl font-medium text-blue-500">
                            <img class="h-10 ml-6 object-cover" src="includes/images/logo.png" alt="Editor Logo">
                        </h3>
                        <h4 class="text-2xl font-bold text-orange-500">EditHub</h4>
                    </a>
                </div>

                <!-- Links Section -->
                <div class="items-center hidden space-x-8 lg:flex">
                    <a href="./index.php" class="flex text-gray-600 hover:text-orange-500
                cursor-pointer transition-colors duration-800">
                        Home
                    </a>
                    <a href="./tools.php" class="flex text-gray-600 hover:text-orange-500
                    cursor-pointer transition-colors duration-800">
                        Tools
                    </a>
                    <a href="./about.php" class="flex text-gray-600 hover:text-orange-500
                    cursor-pointer transition-colors duration-800">
                        About Us
                    </a>
                    <a href="./contact.php" class="flex text-gray-600 hover:text-orange-500
                    cursor-pointer transition-colors duration-800">
                        Contact
                    </a>


                </div>

                <!-- Icon Menu Section -->
                <div class="flex items-center space-x-5">
                    <?php if(isset($_SESSION['username'])){?>
                        <div class="relative inline-block text-left">
                    <!-- <div class="flex items-center space-x-5"><p class="text-lg text-gray-800">Welcome <span class="text-lg text-gray-800"></span></p></div> -->

                        <!-- Dropdown toggle button -->
                        
                        <button id="dropdown-button" class="relative right-0 z-10 flex items-center p-2 text-sm text-gray-600 bg-white bg-gray-800 focus:outline-none">
                            <span class="mx-1 text-gray-600 cursor-pointer transition-colors duration-300 font-semibold text-orange-600"><?=$_SESSION['username']?></span>
                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown-menu" class="absolute right-0 z-20 w-56 py-2 mt-2 hidden bg-white rounded-md shadow-xl dark:bg-gray-800">
                            <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
                                <div class="mx-1">
                                    <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200"><?=$_SESSION['username']?></h1>
                                    <p class="text-sm text-gray-500 dark:text-gray-400"><?=$_SESSION['email']?></p>
                                </div>
                            </a>

                            <hr class="border-gray-200 dark:border-gray-700 ">
                            
                            <a href="./dashboard.php" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                view profile
                            </a>
                            
                            <a href="./logout.php" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                <button> Logout</button>
                                
                            </a>

                        </div>
                    </div>
                      
                    <?php }else {?>
                    <!-- Register -->
                    <a class="flex text-gray-600 hover:text-orange-500
                    cursor-pointer transition-colors duration-300">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                        </svg>
                        <button onclick="toggleModal2()">Register</button>
                        
                    </a>

                    <!-- Login -->
                    <a class="flex text-gray-600
                    cursor-pointer transition-colors duration-300
                    font-semibold text-orange-600">

                        <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                        </svg>
                        <button onclick="toggleModal1()"> Login</button>

                    </a>
                    <?php }?>
                </div>
            </nav>
        </div>
    </div>

    <!-- Model popup start -->

    <section id="registermodal" class="hidden">

        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 ">
            <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-900 opacity-75" />
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="px-4 py-3 mb-0 text-right">

                        <button type="button" onclick="toggleModal2()" class="bg-white rounded-md p-2  items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Create and account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="./registration.php" method="post" autocomplete="off">
                            <div>
                                <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                <input type="fname" name="fname" id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full Name" required="">
                            </div>
                            <div>
                                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="username" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div>
                                <label for="confirmpassword" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                                <input type="confirmpassword" name="confirmpassword" id="confirmpassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already have an account? <button onclick="toggleModal2();toggleModal1()" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</button>
                            </p>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="loginmodal" class="hidden">

        <div class="fixed z-10 overflow-y-auto top-0 w-full left-0 ">
            <div class="flex items-center justify-center min-height-100vh pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-900 opacity-75" />
                </div>
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="px-4 py-3 mb-0 text-right">

                        <button type="button" onclick="toggleModal1()" class="bg-white rounded-md p-2  items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Log in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="./login.php" method="post" autocomplete="off">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                      <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                      <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                            </div>
                            <button type="submit" name="submit"
                            class="py-2 w-full px-4 bg-blue-500 text-white rounded font-medium hover:bg-blue-700 mr-2 transition duration-500"><i
                                class="fas fa-plus"></i> Log In</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Don’t have an account yet? <button onclick="toggleModal2();toggleModal1()" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register</button>
                            </p>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
</body>
<script src="./includes/js/main.js"></script>
</html>