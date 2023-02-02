<div class="modal-dialog modal-xl">
    <form id="editData">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Edit Company Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" value="{{$editData->name}}"
                                id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Company Name</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="{{$editData->email}}"
                                id="floatingInput" placeholder="Enter Email">
                            <label for="floatingInput">Company Email</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="contact_no"
                                value="{{$editData->contact_no}}" id="floatingInput" placeholder="Enter Contact">
                            <label for="floatingInput">Company Contact</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="alt_contact_no"
                                value="{{$editData->alt_contact_no}}" id="floatingInput"
                                placeholder="Enter Alternate Contact">
                            <label for="floatingInput">Company Alternate Contact</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" value="{{$editData->address}}"
                                id="floatingInput" placeholder="Enter Alternate Contact">
                            <label for="floatingInput">Company Address</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="city" value="{{$editData->city}}"
                                id="floatingInput" placeholder="Enter Your City">
                            <label for="floatingInput">City</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="country"
                                value="{{$editData->country}}" placeholder="Enter Country Name">
                            <label for="floatingInput">Country</label>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="currency_code" id="floatingInput"
                                value="{{$editData->currency_code}}" placeholder="Enter Currency Code">
                            <label for="floatingInput">Currency Code</label>
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-3 col-3">

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" name="pincode"
                                value="{{$editData->pincode}}" placeholder="Enter Pincode">
                            <label for="floatingInput">Pincode</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="state"
                                value="{{$editData->state}}" placeholder="Enter State">
                            <label for="floatingInput">State</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="currency_symbol"
                                value="{{$editData->currency_symbol}}" id="floatingInput"
                                placeholder="Enter Currency Symbol">
                            <label for="floatingInput">Currency Symbol</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-3 col-sm-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="gst_no"
                                value="{{$editData->gst_no}}" placeholder="Enter Name">
                            <label for="floatingInput">Gst Number</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput"
                                value="{{$editData->fiscal_year_start}}" name="fiscal_year_start"
                                placeholder="Enter Name">
                            <label for="floatingInput">Fiscal year Start Date</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="floatingInput"
                                value="{{$editData->fiscal_year_end}}" name="fiscal_year_end" placeholder="Enter Name">
                            <label for="floatingInput">Fiscal year End Date</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput"
                                value="{{$editData->book_start_from}}" name="book_start_from" placeholder="Enter Name">
                            <label for="floatingInput">Book Start From</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" value="{{$editData->book_end}}"
                                name="book_end" placeholder="Enter Name">
                            <label for="floatingInput">Book End</label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Update Info</button>
            </div>
        </div>

    </form>
</div>
<script type="text/javascript">
    $("#editData").on("submit",function(e){
    e.preventDefault();




    var formData =  $(this).serialize();
    console.log(formData);

    $.ajax({
        type: "POST",
        url: "{{route('company.update',$editData->id)}}",
        _token: "{{csrf_token()}}",
        data: formData,
        dataType: "json",
        encode: true,
        success: function(response){
            if(response.status == 400){
                console.log("Data Error");
            }else if(response.status == 200){
                $("#resultView").html(response.html);
                $("#modal-popup").html('');
                $("#modal-popup").modal('hide');
            }
        }
    });

});
</script>
