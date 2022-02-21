<table>
    @foreach($students as $s)
    <tr>
        <td> {{$s->name}} </td>
        <td> {{$s->id}} </td>
    </tr>
    @endforeach
</table>