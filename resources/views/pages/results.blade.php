<!DOCTYPE html>
<html>
<head>
	<title>
		 
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="btn btn-default " href="{{url('/participants')}}" role="button"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back </a>
      <h3 class="text-center">Search Results</h3>
      
    </div>
  </div>
</nav>
<div >
	<div class="row">
	<form   action="{{ url('/logout') }}" method="POST" >
                                            {{ csrf_field() }}
                                            <div class="form-group" style="margin-left: 90%;">
                                            <button class="btn btn-primary " type="submit">Logout</button>

                                        </form>	
	</div>
	<div class="form-group">
	<a  style="margin-left: 50px;" href="{{route('searchcsv', ['field' => $field , 'value' => $value])}}"><button class="btn btn-success">Download csv</button></a>
	
		
	</div>
</div>
	<table class="table table-bordered">
	
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Age</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Gender</th>
								<th>State</th>
								<th>Academic Status</th>
								<th>Institution</th>
								<th>Faculty</th>
								<th>Course</th>
								<th>Level</th>
								<th>Status</th>
								<th>Qualification</th>
								<th>Discipline</th>
								<th>Business</th>
								<th>Specification</th>
								<th>Intention</th>
								<th>Aspiration</th>
								<th>Time Submitted</th>
										 	 	 	 	 	 		 	 	 	 	 	 	 	 	 	 
							</tr>
						
							 @foreach ($results as $result)
							 <tr>
							    <td>{{ $result->id }} </td>
								<td>{{ $result->name }} </td>
								<td>{{ $result->age }} </td>
								<td>{{ $result->email }} </td>
								<td>{{ $result->phone }} </td>
								<td>{{ $result->gender }} </td>
								<td>{{ $result->state }} </td>
								<td>{{ $result->academic }} </td>
								<td>{{ $result->institution }} </td>
								<td>{{ $result->faculty }} </td>
								<td>{{ $result->course }} </td>
								<td>{{ $result->level }} </td>
								<td>{{ $result->status }} </td>
								<td>{{ $result->qualification }} </td>
								<td>{{ $result->discipline }} </td>
								<td>{{ $result->business }} </td>
								<td>{{ $result->specify }} </td>
								<td>{{ $result->intention }} </td>
								<td>{{ $result->aspiration }} </td>
								<td>{{ $result->created_at }} </td>
								
							</tr> 
							  @endforeach
							
							
							
							
							
							
							</table>
</div>
</body>
</html>
     