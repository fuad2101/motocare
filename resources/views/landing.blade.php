<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-gray-100 text-white p-4 shadow-2xs">
    <div class="container mx-auto flex justify-between items-center ">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo" class="h-15 w-auto">
        {{-- <h1 class="text-xl font-bold">{{ config('app.name') }}</h1> --}}
        <div>
            <a class="text-motocare1 hover:text-motocare2  mr-4" href="http://">Home</a>
            <a class="text-motocare1 hover:text-motocare2  mr-4" href="http://">Cara Booking</a>
            <a class="text-motocare1 hover:text-motocare2" href="http://">Testimonial</a>
        </div>
        <nav>
            <a href="{{ route('login') }}" class="text-motocare1 hover:text-motocare2  mr-4">Login</a>
            <a href="{{ route('register') }}" class="text-motocare1 hover:text-motocare2 ">Register</a>
        </nav>
    </div>
</header>

{{-- Hero Section --}}
<section class="hero bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-4">Welcome to {{ config('app.name') }}</h2>
        <p class="text-lg mb-8">Your one-stop solution for managing your tasks efficiently.</p>
        <a href="{{ route('register') }}" class="bg-motocare1 text-white px-6 py-3 rounded hover:bg-motocare2">Get Started</a>
    </div>
</section>
{{-- End Hero Section --}}

{{-- Features Section --}}
<section class="features py-20">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
        <div class="feature bg-white p-6 rounded shadow">
            <h3 class="text-xl font-bold mb-2">Booking</h3>
            <p>Describe the first feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <h3 class="text-xl font-bold mb-2">Jemput</h3>
            <p>Describe the second feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <h3 class="text-xl font-bold mb-2">Service</h3>
            <p>Describe the third feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <h3 class="text-xl font-bold mb-2">Antar</h3>
            <p>Describe the third feature of your application here.</p>
        </div>
    </div>
</section>
{{-- End Features Section --}}

{{-- Testimonials Section --}}
<section class="testimonials bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">What Our Users Say</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="testimonial bg-white p-6 rounded shadow">
                <p>"This app has changed the way I manage my tasks. Highly recommend!"</p>
                <p class="mt-4 font-bold">- User One</p>
            </div>
            <div class="testimonial bg-white p-6 rounded shadow">
                <p>"A must-have tool for anyone looking to stay organized."</p>
                <p class="mt-4 font-bold">- User Two</p>
            </div>
            <div class="testimonial bg-white p-6 rounded shadow">
                <p>"Simple, effective, and easy to use. Love it!"</p>
                <p class="mt-4 font-bold">- User Three</p>
            </div>
        </div>
    </div>
</section>
{{-- End Testimonials Section --}}

{{-- Pricing Section --}}
<section class="pricing py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Pricing Plans</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="plan bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Basic</h3>
                <p class="mb-4">$0/month</p>
                <ul class="mb-4">
                    <li>Feature A</li>
                    <li>Feature B</li>
                </ul>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Sign Up</a>
            </div>
            <div class="plan bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Pro</h3>
                <p class="mb-4">$9.99/month</p>
                <ul class="mb-4">
                    <li>Feature A</li>
                    <li>Feature B</li>
                    <li>Feature C</li>
                </ul>
                <a href="{{ route('register') }}" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Sign Up</a>
            </div>
            <div class="plan bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Enterprise</h3>
                <p class="mb-4">Contact us for pricing</p>
                <ul class="mb-4">
                    <li>All Pro features</li>
                    <li>Dedicated support</li>
                </ul>
                <a href="#" class="bg-blue-500 text-white px-6 py-3 rounded hover:bg-blue-600">Contact Us</a>
            </div>
        </div>
    </div>
</section>
{{-- End Pricing Section --}}

{{-- FAQ Section  --}}
<section class="faq bg-gray-100 py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Frequently Asked Questions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Question One?</h3>
                <p>Answer to the first question goes here.</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Question Two?</h3>
                <p>Answer to the second question goes here.</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Question Three?</h3>
                <p>Answer to the third question goes here.</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">Question Four?</h3>
                <p>Answer to the fourth question goes here.</p>
            </div>
        </div>
    </div>
</section>
{{-- End FAQ Section --}}

{{-- Call to Action Section --}}
<section class="cta bg-motocare2 text-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to get started?</h2>
        <p class="mb-8">Sign up today and take control of your tasks!</p>
        <a href="{{ route('register') }}" class="bg-white text-motocare2 px-6 py-3 rounded hover:bg-motocare1 hover:text-white">Sign Up Now</a>
    </div>
</section>

{{-- Footer Section --}}
<section class="footer bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
</section>
{{-- End Footer Section --}}


</body>
</html>
