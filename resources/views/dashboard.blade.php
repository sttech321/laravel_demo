<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Member List') }}
            </h2>
            <a href="/member-create" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                <svg class="w-4 h-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9 9V5a1 1 0 112 0v4h4a1 1 0 110 2h-4v4a1 1 0 11-2 0v-4H5a1 1 0 110-2h4z" clip-rule="evenodd" />
                </svg>
                <span>Create Member</span>
            </a>
        </div>
    </x-slot>

    <div class="flex justify-center items-center h-full">
        <div class="w-full max-w-4xl">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul class="divide-y divide-gray-200">
                        @foreach($users as $user)
                            <li class="py-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <div class="text-lg font-bold">Name: {{ $user->name }}</div>
                                        <div class="text-sm">Profession: {{ $user->profession }}</div>
                                    </div>
                                    <div class="flex items-center">
                                        <a href="{{ route('member-show', $user) }}" class="bg-blue-500 text-black font-semibold py-2 px-4 rounded border border-blue-600 hover:bg-blue-600 hover:border-blue-700 mr-2">Edit</a>
                                        <form action="{{ route('member-destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white font-semibold py-2 px-4 rounded border border-red-600 hover:bg-red-600 hover:border-red-700">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
