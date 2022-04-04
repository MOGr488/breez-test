<h1>Departments List</h1>

<table>
    <tr>
        <th>Department Name</th>
        <th>ID</th>
    </tr>
    @foreach ($departments as $department)
    <tr>
        <td>{{ $department['dptname'] }}</td>
        <td>{{ $department['dptid'] }}</td>
    </tr>       
    @endforeach


</table>