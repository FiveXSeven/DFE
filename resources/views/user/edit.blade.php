<x-app-layout>
    <x-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form class="form" action="{{route('user.update', ['id' => $apprenant])}}" method="post">
                            @csrf
                            @method('put')

                            {{-- prenom et nom --}}
                            <div>
                                <x-input-label for="prenom" :value="__('Prenom')" />
                                <x-text-input class="block mt-1 w-full" type="text" name="prenom" required autofocus value="{{$apprenant->prenom}}" />
                            </div>

                            <div>
                                <x-input-label for="nom" :value="__('Nom')" />
                                <x-text-input class="block mt-1 w-full" type="text" name="nom" required autofocus value="{{$apprenant->nom}}" />
                            </div>

                            <div>
                                <x-input-label for="metier" :value="__('Metier')" />
                                <x-text-input class="block mt-1 w-full" type="number" name="filiere_id" required autofocus value="{{$apprenant->filiere->id}}" />
                            </div>

                            <div>
                                <input class="btn" type="submit" value="Modifier">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</x-app-layout>
