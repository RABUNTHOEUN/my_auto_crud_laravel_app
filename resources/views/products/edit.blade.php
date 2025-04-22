<div class="container">
    <h2>Edit product</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $product['name']) }}">
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" name="description"
                value="{{ old('description', $product['description']) }}">
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price', $product['price']) }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
