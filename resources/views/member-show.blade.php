<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Member Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-bold text-lg mb-4">Edit Member Details</h3>
                    <form method="POST" action="{{ route('member-update', $member->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-semibold mb-2">Name:</label>
                            <input type="text" id="name" name="name" value="{{ $member->name }}" class="form-input w-full">
                        </div>
                        <div class="mb-4">
                            <label for="profession" class="block text-sm font-semibold mb-2">Profession:</label>
                            <input type="text" id="profession" name="profession" value="{{ $member->profession }}" class="form-input w-full">
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">Update</button>
                        </div>
                    </form>
                    {{-- <form action="{{ route('member-destroy', $member->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?');">
                        @csrf
                        @method('DELETE')
                        <div class="flex justify-start mt-4">
                            <button type="submit" class="text-white bg-red-500 hover:bg-red-600 px-4 py-2 rounded">Delete</button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
