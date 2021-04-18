@section('scripts') 
<script type="text/javascript">

$(document).ready(function(){
    // $('#datatable').DataTable({

    // // var table = $('#datatable').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     responsive:true,
    //     autoWidth:true,
    //     Order:[0,'asc'],
    //     "ajax" :{
    //         url :baseUrl+'/getAllCategories',
    //         'type':'GET',
    //     },
        // columns: [
        //     {data: 'id', name: 'id'},
        //     {data: 'name', name: 'name'},
        //     {data: 'email', name: 'email'},
        //     {data: 'created_at', name: 'created_at'},
        //     {data: 'updated_at', name: 'updated_at'}
        // ],
    // });
        


    $('#addCatgory').submit(function(event){
        event.PreventDefault();
        var form = $('#addCatgory')[0];
        var formData = new FormData(form);

        $.ajax({
            url : baseUrl+'/addCatgory',
            type: 'POST',
            data :formData,
            processType :false,
            processData :false,
            success: function(data)
            {

            }
        });
    });
});

</script>
 
@endsection


{{-- <script type="text/javascript">

    $(document).ready(function(){
        

    $('#addCatgory').submit(function(event){
        event.PreventDefault();
        var form = $('#addCatgory')[0];
        var formData = new FormData(form);

        $.ajax({
            url : baseUrl+'/addCatgory',
            type: 'POST',
            data :formData,
            processType :false,
            processData :false,
            success: function(data)
            {

            }
        });
    });
});

</script> --}}
 








<script type="text/javascript">
    $.ajaxSetup({
        header :{
            'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
        }
    })

    baseUrl = {!! json_encode(url('/')) !!}

    </script>














// dd($request ->all());
// $request->validate([
//     'category_name' => 'required|min:3|maax:255',
// ]);
// $slug = Str::slug($request->category_name);

// $category = Category::create([
//     'name' => $request->category_name,
//     'slug'=> $slug,
// ]);