<div class="modal-dialog modal-xl">
    <form action="" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Company Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                @csrf
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" autofocus
                                placeholder="Enter Name">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" autofocus
                                placeholder="Enter Email">
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Enter Contact">
                            <label for="floatingInput">Contact</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" autofocus
                                placeholder="Enter Alternate Contact">
                            <label for="floatingInput">Alternate Contact</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter Country Name">
                            <label for="floatingInput">Country</label>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput"
                                placeholder="Enter Currency Code">
                            <label for="floatingInput">Currency Code</label>
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-3 col-3">

                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Enter Pincode">
                            <label for="floatingInput">Pincode</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Enter State">
                            <label for="floatingInput">State</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="Enter Currency Symbol">
                            <label for="floatingInput">Currency Symbol</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-3 col-sm-3">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Gst Number</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Fiscal year Start Date</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Fiscal year End Date</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Book Start From</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="floatingInput" placeholder="Enter Name">
                            <label for="floatingInput">Book End</label>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="modal-footer d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-primary">Update Information</button>
            </div> --}}
        </div>

    </form>
</div>
