<html>
    <head></head>
    <body>
        @foreach($buku as $b)
        <form method="post" action="/updating-data/{{ $b->id }}">
            {{ csrf_field() }}


            <input type="hidden" name="id" value="{{ $b->id }}">

            Judul:
            <input type="text" name="judul" value="{{ $b->judul }}"><br>
            Pengarang:
            <input type="text" name="pengarang" value="{{ $b->pengarang }}"> <br>

            <input type="submit" value="Update">
        </form>
        @endforeach
    </body>
</html>
