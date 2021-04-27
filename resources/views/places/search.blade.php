<x-template-layout>
<title>Search</title>
<!-- <div class ="container"> -->
    <!-- <div class="container"> -->
        <div class="row">

                      
            <!-- <div class="col-md-6" style="margin-top:40px"> -->
                <!-- <h4>Search</h4><hr> -->
                <!-- <form action="{{route('search')}}" method= "GET">
                    <div class="form-group">
                    <label for="">Enter keyword</label>
                    <input type="text" class="form-control" name="query" placeholder="Search here!">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form> -->
                <!-- <br>
                <br>
                <hr> -->
                <!-- <br> -->
                @if(isset($places))
                <!-- <table class ="table table-hover"> -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Desa</th>
                            <th>Kabupaten</th>
                            <th>Provinsi</th>
                            <th>Sehat</th>
                            <th>Sakit</th>
                            <th>Dirawat</th>
                            <th>Sembuh</th>
                            <th>Zona</th>
                            <th scope="col">Detail</th>     
                        </tr>
                    </thead>
                    <tbody>
                       @if(count($places)>0)
                            @foreach($places as $place)
                           
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$place->Desa}}</td>
                                    <td>{{$place->Kabupaten}}</td>
                                    <td>{{$place->provinsi->provinsi}}</td>
                                    <td>{{$place->Sehat}}</td>
                                    <td>{{$place->Sakit}}</td>
                                    <td>{{$place->Dirawat}}</td>
                                    <td>{{$place->Sembuh}}</td>
                                    <td>{{$place->Zona}}</td>
                                    <td>
                                    <a href="/places/{{$place->id}}" class="badge badge-info">detail</a>
                                    </td>
                                </tr>
                            
                            @endforeach
                       @else
                        <tr><td>No result found!</td></tr>
                       @endif
                    </tbody>
                <!-- </table> -->
                @endif
            </div>
        </div>
    </div>
</div>  
</x-template-layout>