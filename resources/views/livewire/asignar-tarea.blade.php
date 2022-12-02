<div>
    <h1>EMPLEADOS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de empleados</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <LAbel>EMPLEADOS</LAbel>
                        @foreach ($empleados as $empleados)
                        <select value="{{$empleados->id}}">{{$empleados->NombreEmpleado}}</select>
                        @endforeach

                        <br>
                        <button wire:click="" class="btn btn-success">Registrar</button>
                    </div>
                    <div class="col">
                        <LAbel>TAREAS POR ASIGNAR</LAbel>
                        @foreach ($tareas as $tareas)
                        <select value="{{$tareas->id}}">{{$tareas->NombreTarea}}</select>
                        @endforeach

                    </div>

                  </div>



            </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Empleados</h3>
            </div>

            <div class="card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th style="width: 10px">ID</th>
            <th>ID Empresa</th>
            <th>Nombre</th>
            <th>DNI</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>LOCALIDAD</th>
            <th>DIRECCION</th>
            <th>ACCION</th>
            </tr>
            </thead>
            <tbody>

                {{-- @foreach ($usuarios as $usuarios)

                <tr>
                    <td>{{$usuarios['id']}}</td>
                    <td>{{$usuarios['idEmpresa']}}</td>
                    <td>{{$usuarios['NombreEmpleado']}}</td>
                    <td>{{$usuarios['Email']}}</td>
                    <td>{{$usuarios['Telefono']}}</td>
                    <td>{{$usuarios['Localidad']}}</td>
                    <td>{{$usuarios['Direccion']}}</td>
                    </tr>
                @endforeach --}}


            </tbody>
            </table>
            </div>

            <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
            </div>
            </div>
    </div>

