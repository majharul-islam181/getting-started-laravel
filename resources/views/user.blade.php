<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
     <h1>User Details </h1>
     <!-- {{print_r($data)}} -->
     <ul>
        <li>
            <span>Name : </span>
            <span><b>{{$data->name}}</b></span>
        </li>
        <li>
            <span>email : </span>
            <span><b>{{$data->email}}</b></span>
        </li>
         <li>
            <span> Address Long : </span>
            <span><b>{{$data->address->geo->lng}}</b></span>
        </li>
    </ul>
</div>
