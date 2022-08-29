<div id="container">
    <form action="{{ route('view-hours-store') }}" method="post">
        @csrf
        <input type="file" name="csv" id="file">
        <input type="submit">
    </form>

    @isset($test)
        {{ $test }}
        test
    @endisset
</div>
