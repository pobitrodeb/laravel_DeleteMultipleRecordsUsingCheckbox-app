<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pobitrodeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <section class="py-5">
        <div class="container">
          <div class="card">
            <div class="card-header bg-danger text-white"> Laravel Delete Multiple Records Using Checkbox</div>
            <div class="card-body">
                @if(count($students) > 0)
                <form action="{{ route('delete') }}" method="POST">
                    @csrf
                    <table class="table table-bordered text-center">

                        <thead>
                         <tr>
                             <th> Select  </th>
                             <th> Sl </th>
                             <th> Name </th>
                             <th> Email </th>
                             <th> PhoneNumber</th>
                             <th> Address </th>
                         </tr>
                        </thead>
                        <tbody>

                          @foreach ($students as $student)
                          <tr>
                              <td><input type="checkbox" name="ids[{{ $student->id  }}]" value="{{ $student->id }}"></td>
                              <td>{{$loop->iteration}}</td>

                             <td> {{ $student->name }}</td>
                             <td> {{ $student->email }}</td>
                             <td> {{ $student->phoneNumber }}</td>
                             <td> {{ $student->address }}</td>
                          </tr>
                          @endforeach

                          @else
                            <tr>
                                <td> <h2 class="text-center text-danger">No Data Aviable </h2> </td>
                            </tr>
                          @endif
                        </tbody>

                     </table>
                     <button type="submit" class="btn btn-danger"> Delete </button>
                </form>

            </div>
          </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
