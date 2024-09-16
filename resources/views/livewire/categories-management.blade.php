<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <button wire:click="create()" class="btn btn-primary">Create New Post</button>

    @if($isOpen)
    @include('livewire.create')
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <button wire:click="edit({{ $category->id }})" class="btn btn-primary">Edit</button>
                    <button wire:click="delete({{ $category->id }})" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>