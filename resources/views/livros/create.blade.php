<!-- resources/views/alunos/create.blade.php -->

@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo Livro</h1>

                    <form action="{{ route('livros.store') }}" method="POST">
                        @csrf
                       

                        
                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">titulo:</label>
                            <input type="text" name="titulo" id="titulo" class="form-input mt-1 block w-full"required>
                        </div>
                        <div class="mb-4">
                            <label for="autor" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor:</label>
                            <input type="text" name="autor" id="autor" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="isbn" class="block text-sm font-medium text-gray-700 dark:text-gray-300">ISBN:</label>
                            <input type="text" name="isbn" id="isbn" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="editora" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Editora:</label>
                            <input type="text" name="editora" id="editora" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="ano_publicação" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ano de publicação:</label>
                            <input type="text" name="ano_publicação" id="ano_publicação" class="form-input mt-1 block w-full" required>
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection