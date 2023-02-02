<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Company Name</th>
            <th>Fiscal Start Year</th>
            <th>Book Start From</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collections as $k => $item)
        <tr>
            <td>{{$k+1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->fiscal_year_start}}</td>
            <td>{{$item->book_start_from}}</td>
            <td>
                <a href="javascript:void(0)" data-param="" data-url="{{route('company.edit',$item->id)}}"
                    title="{{__('Edit')}}" class="load-popup btn btn-warning fw-bold">Edit
                    Info</a>
                <a href="javascript:void(0)" data-param="" data-url="{{route('company.view')}}" title="{{__('View')}}"
                    class="load-popup btn btn-info fw-bold">View
                    Info</a>
                {{-- <a href="javascript:void(0)" data-param="" data-url="{{route('company.delete')}}"
                    title="{{__('Delete')}}" class="load-popup btn btn-danger fw-bold">Delete</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
