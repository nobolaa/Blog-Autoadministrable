<div class="from-group mb-3">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el nombre del rol'
    ]) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

    <h2 class="h3 mt-3">Lista de permisos</h2>

    @foreach ($permissions as $permission)
        <div>
            <label class="font-weight-normal">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{$permission->description}}
            </label>
        </div>
    @endforeach
</div>