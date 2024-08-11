<x-app-layout>
    <x-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="table">
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Filiere</th>
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>

                                    @foreach ($apprenants as $app)
                                        <tr>
                                            <td> {{$app->prenom}} </td>
                                            <td> {{$app->nom}} </td>
                                            <td> {{$app->filiere->nom_filiere}} </td>
                                            <td><a href="{{ route('user.edit', ['id' => $app]) }}">Modifier</a></td>
                                            <td>
                                                <form action="{{ route('user.destroy', ['id' => $app]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <input style="cursor: pointer" type="submit" value="Supprimer">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>
</x-app-layout>

