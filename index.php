<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header with Dark Mode</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // For Dark/Light Mode Toggle
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleDarkMode() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        }
    </script>
    <style>
        /* Style for color change on scroll */
        .header-scroll {
            background-color: #1f2937; /* Darker color */
            transition: background-color 0.3s ease-in-out;
        }

        /* Light and dark header background */
        header {
            background-color: white;
        }

        .dark header {
            background-color: #1f2937; /* Dark Mode Background */
        }
    </style>

<style>
    /* Custom Fade Effect */
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">

<!-- Header Start -->
<header class="fixed w-full z-50 transition duration-300 ease-in-out">
    <div id="navbar" class="flex items-center justify-between px-6 py-4 bg-white dark:bg-gray-800 shadow-md">
        <!-- Logo -->
        <div class="text-2xl font-bold">
            <svg class="w-8 h-8 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18M12 3v18" />
            </svg>
            <span><img src="images/1913.png" alt="1913 Logo" class="inline-block w-16" /></span>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="#about" class="hover:text-gray-500 dark:hover:text-gray-300">About</a>
            <div class="relative group">
                <button class="hover:text-gray-500 dark:hover:text-gray-300">
                    Services
                    <svg class="w-4 h-4 inline ml-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="absolute hidden group-hover:block bg-white dark:bg-gray-700 shadow-lg rounded-md mt-2 w-40">
                    <a href="#service1" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">Web Design</a>
                    <a href="#service2" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">Web Development</a>
                    <a href="#service3" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">SEO Services</a>
                    <a href="#service4" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">E-commerce Development</a>
                    <a href="#service5" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">Custom Solutions</a>
                    <a href="#service6" class="block px-4 py-2 hover:bg-gray-200 dark:hover:bg-gray-600">Consulting Services</a>
                </div>
            </div>
            <a href="#projects" class="hover:text-gray-500 dark:hover:text-gray-300">Projects</a>
            <a href="#contact" class="hover:text-gray-500 dark:hover:text-gray-300">Contact Us</a>
        </nav>

        <!-- Search and Dark/Light Toggle -->
        <div class="flex items-center space-x-4">
            <!-- Search Icon -->
            <button class="hover:text-gray-500 dark:hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20h4M6 10h12M10 10a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </button>

            <!-- Dark/Light Mode Toggle -->
            <button onclick="toggleDarkMode()" class="hover:text-gray-500 dark:hover:text-gray-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 3v1M12 20v1M4.22 4.22l.707.707M18.364 18.364l.707.707M1 12h1M20 12h1M4.22 19.778l.707-.707M18.364 5.636l.707-.707M12 7a5 5 0 100 10A5 5 0 0012 7z" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Button -->
        <button class="md:hidden flex items-center">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="md:hidden bg-white dark:bg-gray-800 px-6 py-4">
        <a href="#about" class="block py-2">About</a>
        <a href="#projects" class="block py-2">Projects</a>
        <a href="#contact" class="block py-2">Contact Us</a>
        <!-- Services dropdown -->
        <div>
            <button class="w-full text-left py-2">Services</button>
            <div class="pl-4">
                <a href="#service1" class="block py-2">Service 1</a>
                <a href="#service2" class="block py-2">Service 2</a>
                <a href="#service3" class="block py-2">Service 3</a>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->





 <!-- Hero Section -->
<section class="relative bg-gray-900 text-gray-100 py-20 lg:py-32">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <!-- Text Content -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                    Professional Web Solutions <br> That Elevate Your Brand
                </h1>
                <p class="mb-8 text-lg lg:text-xl">
                    We design, develop, and deliver scalable web solutions that help your business thrive in the digital world.
                </p>
                <div class="space-x-4">
                    <a href="#services" class="inline-block bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-full font-medium transition">
                        Our Services
                    </a>
                    <a href="#contact" class="inline-block bg-purple-600 hover:bg-purple-700 px-6 py-3 rounded-full font-medium transition">
                        Get in Touch
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="lg:w-1/2 mt-12 lg:mt-0 flex justify-center items-end">
                <img src="images/hero-image.jpg" alt="Web Design" class="max-w-lg rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>
<!-- Services sections -->
<section class="py-20 bg-gray-900 text-gray-100">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-4">Our Services</h2>
            <p class="text-lg lg:text-xl text-gray-400">We offer a wide range of services to bring your ideas to life.</p>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.354a4.474 4.474 0 00-3.507 6.92l-3.758 3.76a3.25 3.25 0 104.598 4.598l3.759-3.758a4.474 4.474 0 106.919-6.92 4.474 4.474 0 00-6.92-6.92z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Web Design</h3>
                    <p class="text-gray-400">We create beautiful and user-friendly designs that enhance user experience and engagement.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 12l4 4 4-4m-4-4v8"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Web Development</h3>
                    <p class="text-gray-400">We build responsive and scalable websites using modern technologies to help your business grow.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12l2 2 4-4m1-6h5a2 2 0 012 2v14a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5l2-2h4l2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">SEO Services</h3>
                    <p class="text-gray-400">We optimize your website to improve its ranking on search engines and drive more traffic.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 6h-8l-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V8a2 2 0 00-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">E-commerce Development</h3>
                    <p class="text-gray-400">We create high-performance e-commerce websites to help you reach more customers and grow your business.</p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 13l-4 4-4-4m8-8l-4 4-4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Custom Solutions</h3>
                    <p class="text-gray-400">Tailored web solutions that meet your specific business needs and challenges.</p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="bg-gray-800 rounded-lg shadow-lg p-6 hover:bg-gray-700 transition">
                <div class="text-center">
                    <div class="mb-6">
                        <!-- Icon (replace with your icon or SVG) -->
                        <svg class="w-12 h-12 mx-auto text-teal-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21v-2a4 4 0 00-4-4H7a4 4 0 00-4 4v2m16-10h-4m4 4h-4m2-6V5a2 2 0 10-4 0v4m0 0H9m4 0H9"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Consulting Services</h3>
                    <p class="text-gray-400">Expert advice and strategies for improving your web presence and achieving business goals.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-gray-900 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-4">Digital Marketing Experts Dedicated To Your Growth</h2>
            <p class="text-lg max-w-2xl mx-auto mb-8">We specialize in transforming businesses through innovative digital marketing strategies. Whether it's SEO, SEM, or social media marketing, our team is dedicated to helping your business grow and succeed online.</p>
        </div>
        
        <div class="grid gap-8 lg:grid-cols-3 mt-12">
            <!-- Box 1 -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                <h3 class="text-2xl font-semibold mb-4">Search Engine Optimization (SEO)</h3>
                <p class="text-base text-gray-400">Boost your visibility and rank higher on search engines to attract more customers to your business.</p>
            </div>
            
            <!-- Box 2 -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                <h3 class="text-2xl font-semibold mb-4">Social Media Marketing</h3>
                <p class="text-base text-gray-400">Engage with your audience on social platforms and build a loyal customer base that grows with you.</p>
            </div>
            
            <!-- Box 3 -->
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                <h3 class="text-2xl font-semibold mb-4">Pay-Per-Click Advertising (PPC)</h3>
                <p class="text-base text-gray-400">Maximize your ROI with expertly managed PPC campaigns that drive immediate traffic and conversions.</p>
            </div>
        </div>
    </div>
</section>


<!-- Contact  section -->
<section class="bg-gray-100 py-16 ">
    <div class="container mx-auto px-4 lg:px-8 mx-auto box-border w-full max-w-[1240px] 2xl:max-w-[1300px] 3xl:max-w-[1400px] 5xl:max-w-[1440px] px-5 md:px-6">
        <div class="flex flex-col lg:flex-row items-start justify-between">
            <!-- Left Column -->
            <div class="lg:w-1/2 mb-12 lg:mb-0">
                <h2 class="py-2 text-5xl md:text-5xl lg:text-6xl xl:text-7xl lg:max-w-xl font-serif pt-4">Ready To Win More Customers?</h2>
                <p class="text-xl mb-6 text-gray-700 py-4">
                    Connect for more website traffic, qualified leads, and an established online brand image.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8-4H8m8 8H8m2 4H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2v7m-2 4h-4" />
                        </svg>
                        Email: <a href="mailto:info@1913.in" class="text-blue-600 ml-2">info@1913.in</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.55 6.44l3.53 3.54m-3.53 0h7.78m0 0l3.53-3.54m0 0l3.53 3.54m-3.53 0H8.08m0 0l-3.53 3.54m-3.53 0h7.78m0 0l3.53 3.54m0 0l3.53-3.54m0 0H8.08m0 0l-3.53 3.54m0 0h7.78" />
                        </svg>
                        Skype: <span class="text-blue-600 ml-2">rupinder.singh883</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.55 6.44l3.53 3.54m-3.53 0h7.78m0 0l3.53-3.54m0 0l3.53 3.54m-3.53 0H8.08m0 0l-3.53 3.54m-3.53 0h7.78m0 0l3.53 3.54m0 0l3.53-3.54m0 0H8.08m0 0l-3.53 3.54m0 0h7.78" />
                        </svg>
                        WhatsApp: <span class="text-green-500 ml-2">+91 9914178318</span>
                    </li>
                </ul>
            </div>

        <!-- Right Side (Form) -->
        <div class="w-full lg:w-1/2 bg-white p-8 rounded-lg shadow-lg">
            <!-- Display Success or Error Messages -->
            <?php if(isset($message)) echo $message; ?>

            <form action="form.php" method="POST" class="bg-gray-100 p-6 rounded-lg ">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone</label>
                    <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="interests" class="block text-gray-700">Interests</label>
                    <select id="interests" name="interests" class="w-full px-3 py-2 border rounded">
                        <option value="web_design">Web Design</option>
                        <option value="web_development">Web Development</option>
                        <option value="seo">SEO</option>
                        <option value="marketing">Digital Marketing</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-3 py-2 border rounded" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox" required>
                        <span class="ml-2">I accept the terms and conditions</span>
                    </label>
                </div>
                <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Send Your Enquiry
                </button>
            </form>
        </div>
        
        </div>
    </div>
</section>



<footer class="bg-gray-900 text-gray-400 py-12">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <!-- Left Column: Company Info -->
            <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                <h3 class="text-white text-2xl font-bold mb-4">Rupinder Arts</h3>
                <p class="text-gray-400 mb-4">
                    We provide expert digital marketing and web design services tailored to grow your business.
                </p>
                <ul class="flex space-x-4">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12c0 4.99 4.02 9 9 9 1.54 0 2.98-.37 4.25-1.02-.25-.46-.44-.96-.53-1.5H12v-4.5h2.85c-.15-.48-.15-.98 0-1.5H12v-2h3c.15-.51.15-1.02 0-1.5H12V6h2.85c.15-.46.36-.89.66-1.26-1.26-.66-2.7-1.02-4.25-1.02zM12 0C5.38 0 0 5.38 0 12c0 6.62 5.38 12 12 12s12-5.38 12-12C24 5.38 18.62 0 12 0zm0 22c-5.52 0-10-4.48-10-10S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.04c-5.48 0-9.96 4.48-9.96 9.96 0 5.48 4.48 9.96 9.96 9.96 5.48 0 9.96-4.48 9.96-9.96 0-5.48-4.48-9.96-9.96-9.96zm5 14.64h-3v-6h3v6zm-5 0h-3v-6h3v6zm2-10h-6v-3h6v3z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Center Column: Quick Links -->
            <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                <h3 class="text-white text-2xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white">About Us</a></li>
                    <li><a href="#" class="hover:text-white">Services</a></li>
                    <li><a href="#" class="hover:text-white">Projects</a></li>
                    <li><a href="#" class="hover:text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Right Column: Contact Info -->
            <div class="w-full lg:w-1/3">
                <h3 class="text-white text-2xl font-bold mb-4">Contact Us</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c-2 0-5-1.5-5-4V7c0-2.25 1.5-4 3-4s3 1.75 3 4v1c0 2.5-3 4-3 4zm0 0c2 0 5 1.5 5 4v1c0 2.25-1.5 4-3 4s-3-1.75-3-4v-1c0-2.5 3-4 3-4zM9 14h6" />
                        </svg>
                        Phone: <a href="tel:+19914178318" class="text-gray-400 ml-2">+91 99141 78318</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m8-4H8m8 8H8m2 4H6a2 2 0 01-2-2V6a2 2 0 012-2h12a2 2 0 012 2v7m-2 4h-4" />
                        </svg>
                        Email: <a href="mailto:info@1913.in" class="text-gray-400 ml-2">info@1913.in</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        Address: <span class="text-gray-400 ml-2">1234, City, State, Zip</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="text-center mt-12 border-t border-gray-700 pt-6">
            <p class="text-gray-400 text-sm">
                © 2024 Rupinder Arts. All rights reserved.
            </p>
        </div>
    </div>
</footer>



<script>
    // Change header color on scroll
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        if (window.scrollY > 50) {
            header.classList.add('header-scroll');
        } else {
            header.classList.remove('header-scroll');
        }
    });
</script>

</body>
</html>
