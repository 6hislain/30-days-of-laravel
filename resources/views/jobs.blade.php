<x-layout>
  <x-slot:heading>Jobs Listings</x-slot>
  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/jobs/{{ $job['id'] }}">
          <b>{{ $job['title'] }}</b> pays {{ $job['salary'] }} per year
        </a>
      </li>
    @endforeach
  </ul>
</x-layout>
