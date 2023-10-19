<!DOCTYPE html>

<html>

    <head>
    </head>

    <body>
        <table border='1'>
            <tr>
                <th>KODE BUKU</th>
                <th>JUDUL BUKU</th>
                <th>PENGARANG</th>
                <th>PILIHAN</th>
            </tr>

            @foreach($buku as $b)
                <tr>
                    <td>{{ $b->id }}</td>
                    <td>{{ $b->judul }}</td>
                    <td>{{ $b->pengarang }}</td>
                    <td>
                        <a href="/update/{{ $b->id }}">Edit</a> |
                        <a href="/delete-data/{{ $b->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>

</html>
