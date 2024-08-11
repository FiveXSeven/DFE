<x-app-layout>
    <x-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form class="form" action="{{route('user.store')}}" method="post">

                            @csrf
                            @method('post')

                            {{-- prenom et nom --}}
                            <div>
                                <x-input-label for="prenom" :value="__('Prenom')" />
                                <x-text-input class="block mt-1 w-full" type="text" name="prenom" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="nom" :value="__('Nom')" />
                                <x-text-input class="block mt-1 w-full" type="text" name="nom" required autofocus />
                            </div>

                            <div>
                                <x-input-label for="metier" :value="__('Metier')" />
                                <x-text-input class="block mt-1 w-full" type="number" name="filiere_id" required autofocus />
                            </div>
                            <div>
                                <input class="btn" type="submit" value="Ajouter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</x-app-layout>
