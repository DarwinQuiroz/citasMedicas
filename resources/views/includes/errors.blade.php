@if ($errors->any())
<div class="row justify-content-center">
    <div class="col-12 col-md-8">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-inner--text">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
