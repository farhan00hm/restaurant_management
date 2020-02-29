<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

</head>
<body>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    toastr.options = {
        newestOnTop      : true,
        closeButton      : true,
        progressBar      : true,
        preventDuplicates: false,
        showMethod       : 'slideDown',
        timeOut          : 10000, //default timeout,
    };
    @if($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

</body>
</html>
