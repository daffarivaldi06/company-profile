@extends('layouts.header')
@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>


<table style="margin-top:25px">
  <tr>
    <th>USERNAME</th>
    <th>PASSWORD</th>
  </tr>
    @foreach ($users as $user)

      <tr>
        <td>{{$user->username}}</td>
        <td>{{$user->password}}</td>
      </tr>
    @endforeach

</table>
<div class="d-flex justify-content-end" style="margin-top: 5px">{{ $users->links() }}
</div>

@endsection