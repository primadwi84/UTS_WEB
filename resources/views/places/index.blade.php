<x-template-layout>
<div class ="container">
    <div class="row">
                <h1 class="text-3xl text-black pb-6">Halaman Admin Data Inveksi Covid-19 Per-Desa di Indonesia</h1>

                <!-- <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="row">
                        <div class="row">
                                <div class="form-group mx-sm-3 mb-2">
                                <form action="{{route('search')}}" method= "GET">
                                    <input type="text" class="form-control" name="query" placeholder="Nama Desa">
                                </div>
                                 <button type="submit" class="btn btn-primary mb-2">Cari!</button>
                            </form>
                        </div>
                        </div>
                        </div>

                        <div class="mx-auto" style="width: 570px;"></div>
                         <a href="/places/create" class="btn btn-primary my-3">Tambah Data Desa</a>
                    </div>
                </nav>  -->

                <!-- {{-- search bar --}}
                        <div class="pt-2 relative mx-auto text-gray-600">
                            <form action="/cari" method="get">
                                <input placeholder="Desa" type="search" name="search" placeholder="Search" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                                </svg>                          
                            </button>
                            </form>
                        </div>
                    {{-- end search bar --}} -->


                
                 <nav class="navbar navbar-light"> 
                    <div class="container-fluid">
                        <div class="row">
                        <div class="row">
                        <div class="row">
                                <div class="form-group mx-sm-3 mb-2">
                                <form action="/cari" method="get">
                                  <input placeholder="Desa" type="search" name="search" placeholder="Search" class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                                </div>
                                 <button type="submit" class="btn btn-primary mb-2">Cari!</button>
                                </form>
                        </div>
                        </div>
                        </div>

                        <div class="mx-auto" style="width: 520px;"></div>
                         <a href="/places/create" class="btn btn-primary my-3">Tambah Data Desa</a>
                    </div>
                </nav>  


                
                @if (session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                    </div>
                @endif 
                
                <table class="table">
                <!-- <div class="row"> -->
                        <thead class="thead-blue">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Desa</th>
                                    <th scope="col">Kabupaten</th>
                                    <th scope="col">Provinsi</th>
                                    <th scope="col">Sehat</th>
                                    <th scope="col">Sakit</th>
                                    <th scope="col">Dirawat</th>
                                    <th scope="col">Sembuh</th>     
                                    <!-- <th scope="col">Zona</th>      -->
                                    <th scope="col">Zona</th>     
                                    <th scope="col">Detail</th>     
                                </tr>      
                        </thead>
                    <tbody>
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
                                <!-- <td>{{$place->Zona}}</td> -->
                                <td>{{$place->zona->zona}}</td>
                                <td>
                                <a href="/places/{{$place->id}}" class="badge badge-info">detail</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                <!-- </div> -->
                <!-- </table> -->
        </div> 
    </div>
</div>  

</x-template-layout>