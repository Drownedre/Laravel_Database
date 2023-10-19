<html>
    <head>
    </head>
    <body>
        <form action="/insert-data" method="post">
            {{ csrf_field() }}
            Judul:
            <input type="text" name="judul"><br>
            Pengarang
            <input type="text" name="pengarang">
            <input type="submit" value="Tambah Berita">

        </form>
    </body>
</html>
