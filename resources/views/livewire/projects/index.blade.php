<div class="grid grid-cols-2 gap-4">

    @foreach ($this->projects as $project)
        <a href="{{ route('projects.show', $project) }}">
            <x-project-card-simple :$project></x-project-card-simple>
        </a>
    @endforeach

</div>
