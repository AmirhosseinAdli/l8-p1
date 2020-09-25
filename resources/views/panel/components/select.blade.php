@push('js')
    <script>
       console.log('select')
    </script>
@endpush


<label class="col-md-4 col-form-label text-md-right">{{ $title }}</label>
<div class="col-md-6">
    <select name={{ $name }} class="form-control">
        @if(isset($null_title))
            <option value="" @if($value == null) selected="selected" @endif>{{$null_title}}</option>
        @endif
        @foreach($options as $key => $title)
            <option value="{{$key}}" @if($value == $key) selected="selected" @endif>{{$title}}</option>
        @endforeach
    </select>
</div>
