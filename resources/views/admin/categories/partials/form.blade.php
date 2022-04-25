<div class="from-group mb-2">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el nombre de la categoría'
    ]) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="from-group mb-3">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el slug de la categoría',
        'readonly'
    ]) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
