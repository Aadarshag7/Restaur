<!DOCTYPE html>
<html>
<head>
    <title>Bookings Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>

    <h1>All Bookings</h1>

    @if (!empty($datas) && count($datas) > 0)
        <table cellpadding="10">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data['name'] }}</td>
                        <td>{{ $data['email'] }}</td>
                        <td>{{ $data['number'] }}</td>
                        <td>{{ $data['date'] }}</td>
                        <td>{{ $data['message'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No booking data available.</p>
    @endif

</body>
</html>
