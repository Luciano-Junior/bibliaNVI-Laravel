<!doctype html>
<html lang="pt-br">
  <head>
    <title>Bíblia</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

  </head>
  <body>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img src="https://img.icons8.com/doodle/48/000000/chrome-reader-mode.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Bíblia
            </a>
        </nav>
        <div class="container">
            <div class="row">
                <div class='col-2 d-flex justify-content-start align-items-center'>
                    <a href="{{ url()->previous() }}" class="text-decoration-none"><- Voltar</a>
                </div>
                <div class='col-8'>
                    <h3 class="m-4 d-flex font-weight-bold justify-content-center">Bíblia Sagrada - NVI</h4>
                </div>
            </div>
            <h4 class="m-4">{{$livro.' '.$cod}}</h4>
            <table class="table table-hover">
                <tbody>
                    @foreach($verses as $verso)
                    <tr>
                        <th scope="row">{{$verso->verse}}</th>
                        <td>{!!$verso->text!!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>