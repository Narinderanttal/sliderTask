@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <form action="" id="contactform" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="uploadfilepdf" type="file" name="sortpic" />
                        </div>
                        
                        <div class="form-group">
                          <button type="button" class="btn btn-primary" onclick="return uploadfile()">Send Now</button>
                        </div>
                    </form>


                   
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function uploadfile()
    {
        var file_data = $('#uploadfilepdf').prop('files')[0];   
        var form_data = new FormData();                  
        form_data.append('file', file_data);
        // console.log(form_data);
        //     alert(form_data);

        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({
            type:'POST',
            url: "{{ url('uploadfile') }}",
            data: form_data,
            contentType: false,
            processData: false,
            success: (response) => {

                if (response) {
                   alert('File has been uploaded successfully');
                }
            },
            error: function(response){
                console.log(response);
                $('#image-input-error').text(response.responseJSON.errors.file);
            }
        });
    }
</script>
@endsection