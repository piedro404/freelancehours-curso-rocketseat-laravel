<x-layouts.app>
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2">
            <livewire:projects.show :project_id="$project" />
        </div>
        <livewire:projects.proposals :project_id="$project" />
    </div>
</x-layouts.app>
