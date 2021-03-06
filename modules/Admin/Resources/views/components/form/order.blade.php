@php($inline = isset($inline))
@php($fieldId = 'sort_order-' . str_random(10))

<div class="form-group{{ $errors->has('sort_order') ? ' has-error' : '' }} has-icon">

    @if($inline)
        <div class="p-relative">
    @endif

    <label for="{{ $fieldId }}" class="control-label{{ !$inline ? ' col-sm-3' : '' }}">
        @lang('admin::forms.order_label')
    </label>

    @if(!$inline)
        <div class="col-sm-9">
            <div class="p-relative">
    @endif

                <input type="text"
                       name="sort_order"
                       value="{{ old('sort_order', isset($sortOrder) ? $sortOrder : 0) }}"
                       class="form-control{{ isset($class) ? ' ' . $class : '' }}"
                       id="{{ $fieldId }}"
                       placeholder="@lang('admin::forms.order_placeholder')"
                        >
                <span class="zmdi zmdi-star-outline f-s-18 form-icon"></span>
            </div>
        <span class="help-block">
            {{ $errors->first('sort_order', ':message') }}
        </span>

    @if(!$inline)
        </div>
    @endif

</div>