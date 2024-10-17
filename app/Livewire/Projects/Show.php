<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Show extends Component
{

    public Project $project;

    public function mount($project_id)
    {

        $this->project = Project::find($project_id);

    }

    public function render()
    {
        return view('livewire.projects.show');
    }
}
