<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jobs</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
   

  </head>
  <body>
  @if ($jobs->count() > 0)
                <ul>
                    @foreach ($jobs as $job)
                            <li><a href="{{route('get-job', $job->id)}}">{{$job->title}}</a></li>
                    @endforeach
                </ul>
                
            @endif

  </body>
</html>