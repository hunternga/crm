<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categories;

class Categories extends Component
{
    public $categories, $id, $name, $description, $slug, $banner, $icon, $status, $timestamps;


    public function render()
    {
        $this->categories = Categories::all();
        return view('livewire.categories');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->id = '';
        $this->name = '';
        $this->description = '';
        $this->slug = '';
        $this->banner = '';
        $this->icon = '';
        $this->status = '';
        $this->timestamps = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'banner' => 'required',
            'icon' => 'required',
            'status' => 'required'
        ]);

        Categories::updateOrCreate(['id' => $this->id], [
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
            'banner' => $this->banner,
            'icon' => $this->icon,
            'status' => $this->status
        ]);

        session()->flash('message', $this->id ? 'Category Updated Successfully.' : 'Category Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Categories::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;

        $this->openModal();
    }

    public function delete($id)
    {
        Categories::find($id)->delete();
        session()->flash('message', 'Category Deleted Successfully.');
    }

}