<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea Comic</title>
</head>

<body>
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" required name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" required cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="thumb">Thumb</label>
            <input type="url" required name="thumb">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" required step=".5" name="price">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" required name="series">
        </div>
        <div>
            <label for="sale_date">Date</label>
            <input type="date" required name="sale_date">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type">
        </div>
        <div>
            <input type="submit" value="Crea!">
        </div>
    </form>

</body>

</html>
