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
      <h1 style="text-align:center;">Update Student Data</h1>
<form action="/edit" method="post">
    @csrf

    <br>
    <input type=hidden name="student_id" value="{{$x['student_id']}}" readonly> 

    <h2>Name <input type=text name="name" value="{{$x['name']}}" readonly></h2>

    <h2>Title<input type=text name="title" value="{{$x['title']}}" readonly></h2>

    <h2> Start Date<input type=date name="start_date" value="{{$x['start_date']}}" ></h2>
  
    <h2>End Date<input type=date name="end_date" value="{{$x['end_date']}}" ></h2>
 
    <h2><label >Progress</label>
  <select  name="progress" >
    <option value="Milestone 1"> Milestone 1</option>
    <option value="Milestone 2"> Milestone 2</option>
    <option value="Final Report"> Final Report</option>
  </select></h2>

  <h2><label >Status</label>
  <select  name="status">
    <option value="On track">  On track</option>
    <option value="Delayed">  Delayed</option>
    <option value="Extended"> Extended</option>
    <option value="Completed"> Completed</option>
  </select></h2>


  <br/>
    <button type="submit">UPDATE</button>
    <button type="reset">RESET</button>

</form> 
<br>  <br/>  <br/>  <br/>  <br/>  <br/>
 <h2><a href="{{url('/redirect')}}">Dashboard</a></h2>
    

