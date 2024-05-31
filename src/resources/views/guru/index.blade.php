<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Table</title>
    <link rel="stylesheet" href="frontend/style.css">
</head>
<body>
    <table>
        <caption>Data Guru SMA Cendana</caption>
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Umur</th>
                <th scope="col">Masa Kerja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datagurus as $dataguru)
                <tr>
                    <td>{{$dataguru->nama}}</td>
                    <td>{{$dataguru->jabatan}}</td>
                    <td>{{$dataguru->umur}}</td>
                    <td>{{$dataguru->masakerja}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Add event listener to table rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', () => {
                // Toggle row background color on click
                row.classList.toggle('active');
            });
        });
    </script>
</body>
</html>