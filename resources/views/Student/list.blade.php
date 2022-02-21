<table>
    @foreach($students as $s)
    <tr>
        <td> {{$s->name}} </td>
        <td> {{$s->id}} </td>
        <td>{{$s->dob}}</td>
    </tr>
    @endforeach
</table>