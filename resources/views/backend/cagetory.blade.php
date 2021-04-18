@extends('backend.layout.ddMaster')

@section('title') 
 Categories
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <div class="button-items">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="#myModal">Add New</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Datatable</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Create at</th>
                            <th>Updated at</th>
                            <th>Edit</th>
                            {{-- <th>Delete</th> --}}
                        </tr>
                        </thead>
                        <tbody>
                            <td>Id</td>
                            <td>Caesar Vance</td>
                            <td>Pre-Sales Support</td>
                            <td>New York</td>
                            <td>21</td>
                            <td>2011/12/12</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->

    </div>
</div>
@include('backend.partials.catgorymodel')
@endsection

@section('scripts') 
<script type="text/javascript">

$(document).ready(function(){
    // alert("Done");
    $('#addCatgory').submit(function(event){

    
    event.PreventDefault();
    var form = $('#addCatgory')[0];
    var formData = new FormData(form);

    $.ajax({
        url :baseUrl+'/addCatgory',
        type : 'POST',
        data : formData,
        contentType :false,
        processData :false,
        
        success:function(data){
            $('#myModal').model('hide');
            Swal.fire({
            icon: 'success',
            title: 'success',
            footer: 'Category Created Successfully'
        })
        }

        

    });
    });
});












// $('#addCatgory').submit(function(){
//         // e.preventdefault();
//         var name =$("input[name=name]").val();
//         var _token =$("input[name=_token]").val();
//         $.ajax({
//             url:"{{route('cagetory')}}",
//             type:"POST",
//             data:{
//                 name:name,
//                 _token:_token
//             },
//         });


// })
</script>
 
@endsection