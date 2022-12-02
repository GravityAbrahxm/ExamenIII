<div>
    <h1>EMPRESAS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de empresas</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <LAbel>CIF</LAbel>
                        <input wire:model="nombre" type="text" placeholder="CIF" class="form-control" style="width: 450px">
                        <LAbel>Nombre de la Empresa</LAbel>
                        <input wire:model="nombre" type="text" placeholder="NOMBRE DE LA EMPRESA" class="form-control" style="width: 450px">
                        <LAbel>LOCALIDAD</LAbel>
                        <input wire:model="nombre" type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                        <br>
                        <button wire:click="" class="btn btn-success">Registrar</button>
                    </div>
                    <div class="col">
                        <LAbel>DIRECCION</LAbel>
                        <input wire:model="nombre" type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">
                        <LAbel>EMAIL</LAbel>
                        <input wire:model="nombre" type="text" placeholder="EMAIL" class="form-control" style="width: 450px">
                        <LAbel>TELEFONO</LAbel>
                        <input wire:model="nombre" type="text" placeholder="TELEFONO" class="form-control" style="width: 450px">

                    </div>

                  </div>



            </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">EMPRESAS</h3>
            </div>

            <div class="card-body">
            <table class="table table-bordered">
            <thead>
            <tr>
            <th style="width: 10px">ID</th>
            <th>CIF</th>
            <th>NOMBRE DE LA EMPRESA</th>
            <th>LOCALIDAD</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
            <th>DIRECCION WEB</th>
            <th>TELEFONO</th>
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
