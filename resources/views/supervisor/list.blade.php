<head>
<style>


th, td, tr {

border:1px solid ;
border-collapse: collapse;
margin-left: auto; 
margin-right: auto;

}

</style>
</head>
<body style="background-color:#6e91b6;">
<h1 >Student List</h1>
<table style="width:100%">
    <tr>
        <h2><td> <br>Student ID  <br><br></td></h2>
        <h2><td> <br>Student Name <br><br></td></h2>
        <h2><td><br> Project Title <br><br></td></h2>
        <h2><td><br>Start Date<br><br></td></h2>
        <h2><td><br>End Date <br><br></td></h2>
        <h2><td><br>Project Progress<br><br></td></h2>
        <h2><td><br>Project Status<br><br></td></h2>
        <h2><td><br> Operations <br><br></td></h2>
    </tr>
    @foreach($x as $paper)
    <tr>
        <td><br><br>{{$paper['student_id']}}<br><br></td>
        <td><br><br>{{$paper['name']}}<br><br></td>
        <td><br><br>{{$paper['title']}}<br><br></td>
        <td><br><br>{{$paper['start_date']}}<br><br></td>
        <td><br><br>{{$paper['end_date']}}<br><br></td>
        <td><br><br>{{$paper['progress']}}<br><br></td>
        <td><br><br>{{$paper['status']}}<br><br></td>
        <td><br><br><a href={{"upd/".$paper['student_id']}}>UPDATE</a><br><br></td>

    </tr>
    @endforeach
</table>


<span>
    {{$x->links()}}
</span>
<br><br>
 <h2><a href="{{url('/redirect')}}">Dashboard</a></h2>
</body>
<style>
   .w-5
   {
    display:none
   } 
</style>



