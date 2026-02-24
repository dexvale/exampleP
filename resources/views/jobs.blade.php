<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}" class="text-black-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong> : {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>