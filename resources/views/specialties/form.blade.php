<div class="form-group">
    <label for="name">Nombre de la especialidad</label>
    {!! Form::text('name', old('name', $specialty->name), ['class'=> 'form-control mayuscula', 'autocomplete' => 'off', 'required', 'placeholder' => 'Nombre de la especialidad']) !!}
</div>

<div class="form-group">
    <label for="description">Descripción de la especialidad</label>
    {!! Form::textarea('description', old('description', $specialty->description), ['class' => 'form-control', 'rows' => 2, 'placeholder' => 'Descripción de la especialidad']) !!}
</div>

<button type="submit" class="btn btn-success">Guardar</button>
