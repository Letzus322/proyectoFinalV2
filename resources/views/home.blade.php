@if (Auth::user()->type == 1)
    @include('adminSession')

@elseif (Auth::user()->type == 0)
    @include('normalSession')
@endif