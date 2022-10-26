<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class CategoriesController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $search, $image, $selected_id, $pageTitle, $componentName;
    private $pagination = 2;

    protected $rules = [
        'name' => 'required|unique:categories|min:3',
    ];

    protected $messages = [
        'name.required' => 'El nombre de la categoría es requerido',
        'name.unique' => 'El nombre de la categoría ya existe',
        'name.min' => 'El nombre de la categoría debe tener al menos 3 caracteres',
    ];

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorías';
    }

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $categories = Category::when($this->search, function ($query) {
            return $query->where('name', 'like', '%' . $this->search . '%');
        })->orderBy('id', 'desc')->paginate($this->pagination);

        return view('livewire.category.categories', compact('categories'))
            ->extends('layouts.theme.app')
            ->section('content');
    }

    public function Edit($id)
    {
        $record = Category::find($id, ['id', 'name', 'image']);
        $this->selected_id = $record->id;
        $this->name = $record->name;
        $this->image = null;

        $this->emit('show-modal', 'show modal!');
    }

    public function Store()
    {

        $this->validate();

        $data['name'] = $this->name;

        if ($this->image) {
            $imageName = uniqid() . '_.' . $this->image->getClientOriginalName();
            $this->image->storeAs('public/categories', $imageName);
            $data['image'] = $imageName;
        }

        Category::create($data);

        $this->resetUI();
        $this->emit('category-added', 'category added');
    }

    public function Update()
    {
        $this->validate([
            'name' => 'required|min:3|unique:categories,name,' . $this->selected_id,
        ]);

        $data['name'] = $this->name;

        if ($this->image) {
            $imageName = uniqid() . '_.' . $this->image->getClientOriginalName();
            $this->image->storeAs('public/categories', $imageName);
            $data['image'] = $imageName;
        }

        Category::find($this->selected_id)->update($data);

        $this->resetUI();
        $this->emit('category-updated', 'category updated');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->image = null;
        $this->selected_id = 0;
        $this->search = '';
    }
}
