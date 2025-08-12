<div>
    <h1>Student List</h1>

     <table border="1">
        <td>Name</td>
        <td>email</td>
        <td>batch</td>
     @foreach($studentDB as $studentDB)
     <tr>
        <td>{{$studentDB->name}}</td>
         <td>{{$studentDB->email}}</td>
         <td>{{$studentDB->batch}}</td>
     </tr>
     @endforeach
     </table>
   
 </div>
