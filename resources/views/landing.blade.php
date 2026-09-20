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
            <div class="flex justify-center mb-4">
                <svg class="h-20 text-motocare1 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Booking</h3>
            <p>Describe the first feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <div class="flex justify-center mb-4">
                <svg class="h-20 text-motocare1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Jemput</h3>
            <p>Describe the second feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <div class="flex justify-center mb-4">
                <svg class="h-20 text-motocare1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Service</h3>
            <p>Describe the third feature of your application here.</p>
        </div>
        <div class="feature bg-white p-6 rounded shadow">
            <div class="flex justify-center mb-4">
                <svg class="h-20 text-motocare1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Antar</h3>
            <p>Describe the third feature of your application here.</p>
        </div>
    </div>
</section>
{{-- End Features Section --}}

{{-- Testimonials Section --}}
<section class="testimonials bg-gray-100 py-20">
    <div class="container mx-auto text-center bg-linear-to-r from-motocare1 to-amber-500 p-15 rounded shadow">
        <h2 class="text-3xl text-white font-bold mb-8">{{ __('What Our Users Say') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            <div class="testimonial bg-white p-6 rounded shadow ">
                <flux:avatar class="mx-auto mb-4" src="https://unavatar.io/x/calebporzio" />
                <p>"This app has changed the way I manage my tasks. Highly recommend!"</p>
                <p class="mt-4 font-bold">- User One</p>
            </div>
            <div class="testimonial bg-white p-6 rounded shadow">
                <flux:avatar class="mx-auto mb-4" src="https://unavatar.io/x/elonmusk" />
                <p>"A must-have tool for anyone looking to stay organized."</p>
                <p class="mt-4 font-bold">- User Two</p>
            </div>
            <div class="testimonial bg-white p-6 rounded shadow">
                <flux:avatar class="mx-auto mb-4" src="https://unavatar.io/telegram/drsdavidsoft" />
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
        <h2 class="text-3xl font-bold mb-8">{{ __('Pricing Plans') }}</h2>
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
        <h2 class="text-3xl font-bold mb-8">{{ __('Frequently Asked Questions') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">{{ __('Question One?') }}</h3>
                <p>{{ __('Answer to the first question goes here.') }}</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">{{ __('Question Two?') }}</h3>
                <p>{{ __('Answer to the second question goes here.') }}</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">{{ __('Question Three?') }}</h3>
                <p>{{ __('Answer to the third question goes here.') }}</p>
            </div>
            <div class="faq-item bg-white p-6 rounded shadow">
                <h3 class="text-xl font-bold mb-2">{{ __('Question Four?') }}</h3>
                <p>{{ __('Answer to the fourth question goes here.') }}</p>
            </div>
        </div>
    </div>
</section>
{{-- End FAQ Section --}}

{{-- Call to Action Section --}}
<section class="cta bg-motocare2 text-white py-20">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">{{ __('Ready to get started?') }}</h2>
        <p class="mb-8">{{ __('Sign up today and take control of your tasks!') }}</p>
        <a href="{{ route('register') }}" class="bg-white text-motocare2 px-6 py-3 rounded hover:bg-motocare1 hover:text-white">{{ __('Sign Up Now') }}</a>
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
