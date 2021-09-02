<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
        html, body {
            background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    CRUD Clase presencial
                </div>
 <!-- Modal -->

 <script>
    function validIsImg (e){
        alert("aa")
        console.log(e)
    }
</script>
                    <div class="container">
                        <div class="row">
                            
                            <div class="col">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">Registrar nuevo producto</button>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <button type="button" class="btn btn-light btn-sm"><i class="bi bi-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Buscar producto">
                                  </div>
                            </div>
                        </div>
                        
                          
                          <!-- Modal -->
                          <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" onsubmit="">
                                        <div class="mb-3">
                                          <label for="name" class="form-label">Nombre</label>
                                          <input type="email" class="form-control" id="name" aria-describedby="name">
                                        </div>
                                        <div class="mb-3">
                                          <label for="image" class="form-label">Imagen</label>
                                          <input type="file" class="form-control" id="image">
                                        </div>
                                        <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1" onchange="validIsImg(e)">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        <div class="row">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="table-dark">
                                        <th colspan="7">
                                            productos
                                        </th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr class="table-dark">
                                        <th>
                                            Id
                                        </th>
                                        <th>
                                            Nombre
                                        </th>
                                        <th>
                                            Descripción
                                        </th>
                                        <th>
                                            Imagen
                                        </th>
                                        <th>
                                            Empresa
                                        </th>
                                        <th>
                                            precio
                                        </th>
                                        <th>
                                            Acciones
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($products as $row)
                                        <tr>
                                            <td>{{$row['id']}}</td>
                                            <td>{{$row['name']}}</td>
                                            <td>{{$row['description']}}</td>
                                            <td><img src={{{"data:image/png;base64," . base64_encode($row['image'])}}}  width = "50px" height = "50px"/></td>
                                            <td>{{$row['companieId']}}</td>
                                            <td>{{$row['precio']}}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button type="button" class="btn btn-sm btn-info">Editar</button>
                                                    <button type="button" class="btn btn-sm btn-danger">Eliminar</button>
                                                  </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
