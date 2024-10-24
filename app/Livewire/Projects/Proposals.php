<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;
    public int $project_id;

    public function mount(int $project_id) 
    {
        $this->project = Project::findOrFail($project_id);
    }

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
