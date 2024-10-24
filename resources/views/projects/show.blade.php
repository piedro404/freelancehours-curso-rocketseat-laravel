<x-layouts.app>
    <div class="grid grid-cols-10 gap-6">
        <div class="col-span-7">
            <livewire:projects.show :project="$project" />
        </div>
        <div class="col-span-3">
            <livewire:projects.proposals :project_id="$project->id" />
        </div>
    </div>
</x-layouts.app>
