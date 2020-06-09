<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}" aria-describedby="emailHelp">
    @if($help)
        <small id="emailHelp" class="form-text text-muted">{{ $help }}</small>
    @endif
</div>
