<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
     </style>
</head>
<body>
    <h2>Add Item</h2>
    <form action="{{route('product.add')}}" method="POST">
        @csrf
        @method("post")
        <input type="text" name="product" placeholder="Product"><br><br>
        <input type="number" name="price" placeholder="Price"><br><br>
        <input type="number" name="quantity" placeholder="Quantity"><br><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>