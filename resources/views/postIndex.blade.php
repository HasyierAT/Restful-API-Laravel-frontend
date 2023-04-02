<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("These Are List In Post!") }}
                    <div>
                        <x-primary-button type="button" class="mt-4">Create New Post</x-primary-button>
                    </div>
                    <div class="mt-4">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($records as $r)
                                <tr>
                                    <td>{{ $r->id }}</td>
                                    <td>{{ $r->title }}</td>
                                    <td>{{ $r->content }}</td>
                                    <td>{{ $r->image }}</td>
                                    <td>
                                        <x-primary-button type="button" class="mt-4">Edit</x-primary-button>
                                        <x-primary-button type="button" class="mt-4">Delete</x-primary-button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>