<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Job</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
   

  </head>
  <body>
  <div>
                <h1>{{$job->title}}</h1>
                <p>{{$job->description}}</p>
                <p>{{$job->category}}</p>
                <p>{{$job->level}}</p>
                <p>{{$job->applicants->count()}} <a href="{{route('get_applicants', $job->id)}}">applicants</a></p>
     </div>
  </body>
</html>