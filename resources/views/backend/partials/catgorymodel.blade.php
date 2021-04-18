<div class="row">
    <div class="col-sm-6 col-md-3 mt-4">
        <!-- Create cetgory Model -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
{{-- <form method="POST" action="{{ route('cagetory')}}" id="addCatgory"> --}}
                        <form id="addCatgory">
                        @csrf
                        <div class="modal-body" class=" row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="form-group mb-12">
                                        <label for="input-date1">Ad New Catgory</label>
                                        <input id="input-date1" type="text" name="name" class="form-control input-mask">
                                    </div>
                                </div>
                            </div>          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" >Close</button>
    
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Save changes</button>
                        </div>
                    </form>
                   
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
<!-- end row -->