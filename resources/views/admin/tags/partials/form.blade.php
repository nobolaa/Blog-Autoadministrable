<div class="from-group mb-2">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el nombre de la etiqueta'
    ]) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="from-group mb-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el slug de la etiqueta',
        'readonly'
    ]) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {{-- <label for="">Color: </label>

    <select name="color" id="color" class="form-control">
        <option value="red">Rojo</option>
        <option value="yellow">Amarillo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
        <option value="indigo">Indigo</option>
        <option value="purple">Violeta</option>
        <option value="pink">Rosa</option>
    </select> --}}

    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, [
       'class' => 'form-control' 
    ]) !!}
</div>