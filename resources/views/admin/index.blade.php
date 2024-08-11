<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Admin {{ Auth::user()->name }}</h3>
                    <h4>Bienvenue dans votre dashboard</h4>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
