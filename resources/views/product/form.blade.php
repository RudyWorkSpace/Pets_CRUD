
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $product->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('edad') }}</label>
    <div>
        {{ Form::text('edad', $product->edad, ['class' => 'form-control' .
        ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
        {!! $errors->first('edad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>edad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('dueño') }}</label>
    <div>
        {{ Form::text('dueño', $product->dueño, ['class' => 'form-control' .
        ($errors->has('dueño') ? ' is-invalid' : ''), 'placeholder' => 'Dueño']) }}
        {!! $errors->first('dueño', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>dueño</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
