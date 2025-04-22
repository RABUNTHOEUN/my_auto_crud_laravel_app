<div class="container">
    <h2>Create products</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
