<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

        <title>Data tables</title>
        
    </head>
    <body>
        <div class="container">
            <table id="users">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    

        <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"> </script>
        
        <script>
        $(document).ready(function() {
            $('#users').DataTable();
        } );
        </script>

    </body>
</html>
