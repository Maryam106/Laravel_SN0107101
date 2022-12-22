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
      <h1 style="text-align:center;">Add New Student Records</h1>
<form action="/add" method="post">
    @csrf
    <br><h2>Student ID  <br><input type="text" name="student_id" placeholder="Enter Student ID"><br/></h2>
    <h2>Student Name  <br><input type="text" name="name" placeholder="Enter Student Name"><br/></h2>
    <h2> Project Title  <br><input type="text" name="title" placeholder="Enter Project Title"><br/></h2>
    <h2> Supervisor ID  <br><input type="text" name="supervisor_id" placeholder="Enter Supervisor ID"><br/></h2>
    <h2>Examinar 1 Name <br><input type="text" name="ex1" placeholder="Enter Examinar 1 Name"><br/></h2>
    <h2> Examinar 2 Name<br><input type="text" name="ex2" placeholder="Enter Examinar 2 Name"><br/></h2>
    <h2> Start Date <br><input type="date" name="start_date" placeholder="Enter Start Date"><br/></h2>
    <h2>End Date <br><input type="date" name="end_date" placeholder="Enter End Date"><br/></h2>
     <h2> <br><input type="hidden" name="progress" placeholder="" value="mile1"><br/></h2>
    <h2> <br><input type="hidden" name="status" placeholder="" value="on track"><br/></h2>

    <button type=submit>Add </button>
    <button type=reset>Reset </button>
</form>  
<br>
 <h2><a href="{{url('/redirect')}}">Dashboard</a></h2>
    