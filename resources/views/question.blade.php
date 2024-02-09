<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Search Form -->
                    <form action="" method="get" class="mb-6">
                        <label for="search" class="block mb-2">Search by title</label>
                        <div class="flex">
                            <input type="text" name="search" id="search" placeholder="Type title to search" class="flex-1 border border-gray-300 rounded-l py-2 px-4 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-r focus:outline-none focus:bg-blue-600">Search</button>
                        </div>
                    </form>
                    
                    <!-- Post Question Form -->
                    <form method ='POST' action="{{ route('questions.store') }}">
                        @csrf
                        
                        <div class="mb-6">
                            <label for="title" class="block mb-2">Title</label>
                            <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100">
                        </div>
                        <div class="mb-6">
                            <label for="description" class="block mb-2">Question</label>
                            <textarea name="description" id="description" class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-gray-100" placeholder="Type Your Question"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-blue-600">Post Question</button>
                    </form><br><br>
                    
                    <!-- Frequently Asked Questions -->
                    <h1 color='red'>Frequently Asked Questions</h1>
<ol>
    @foreach ($questions as $question)
        <li>
          <h2>Title:</h2>  <strong>{{ $question->title }}</strong><br>
         h3 Question:  {{ $question->description }}
        </li><br>
    @endforeach
</ol>

            </div>
        </div>
    </div>
</x-app-layout>
