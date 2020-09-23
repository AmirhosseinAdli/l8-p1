@push('js')
    <script>
       console.log('select')
    </script>
@endpush


<label class="col-md-4 col-form-label text-md-right">{{ $title }}</label>
<div class="col-md-6">
    <select name={{ $name }} class="form-control">
        @if(isset($null_title))
            <option value="">{{$null_title}}</option>
        @endif
        @foreach($options as $key => $title)
            <option value="{{$key}}">{{$title}}</option>
        @endforeach
    </select>
</div>
