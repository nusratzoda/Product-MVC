<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Here's a list of available products</h1>
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Count</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allProducts as $product)
                    <tr>
                        <td>{{ $product->name }}</td> <!-- Убедитесь, что $product->name — это строка -->
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->count }}</td>
                        <td>{{ $product->price }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>