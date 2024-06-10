@include('Partials.layout')
<nav class="bg-white shadow-md pl-10 pr-10">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="absolute inset-y-0 left-0 flex items-center">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('./assets/images/logoo.PNG') }}" alt="Logo" class="h-8 w-auto">
{{--                    <span class="ml-2 text-xl font-bold text-gray-800">SyndicApp</span>--}}
                </a>
            </div>
            <!-- Navigation Links -->
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden sm:block">
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Properties</a>
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Meetings</a>
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Documents</a>
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Payments</a>
                        <a href="#" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
            <!-- User Authentication -->
            <div class="absolute inset-y-0 right-0 flex items-center space-x-4">
                <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                <a href="#" class="text-gray-900 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
            </div>
        </div>
    </div>
</nav>


