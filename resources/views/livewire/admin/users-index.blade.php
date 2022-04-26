<div class="card">

    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre del usuario">
    </div>

    @if($users->count())
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="125px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar Roles</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$users->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No hay ningún usuario...</strong>
    </div>
    @endif
</div>
