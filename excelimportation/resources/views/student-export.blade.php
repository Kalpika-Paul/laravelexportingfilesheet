<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Registration Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $stud)
        <tr>
            <td>{{ $stud->id}}</td>
            <td>{{ $stud->name }}</td>
            <td>{{ $stud->email }}</td>
            <td>{{ $stud->address }}</td>
            <td>{{\Carbon\Carbon::parse($stud->created_at)->format('d/m/y')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>