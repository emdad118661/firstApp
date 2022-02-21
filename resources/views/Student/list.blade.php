<table>
    @foreach($students as $s)
    <tr>
        <td><a href="/student/get/{{$s->id}}/{{$s->name}}/{{$s->dob}}/">{{$s->name}}</a></td>
        <td><a href="{{route('student.details',['id'=>$s->id,'dob'=>$s->dob,'name'=>$s->name])}}">{{$s->name}}</a></td>
        <td> {{$s->id}} </td>
        <td>{{$s->dob}}</td>
    </tr>
    @endforeach
</table>