<x-template-layout>
<div class ="container">
    <div class="row">
        <div class="col-20">
                <h1 class="text-3xl text-black pb-6">Data Inveksi Covid-19 Per-Desa di Indonesia</h1>
<!--                 
                <div class="row">
                    <form action="/places" class="form-inline" method="GET">
                        <div class="form-group mx-sm-3 mb-2">
                           
                            <input Nama="keyword" type="text" class="form-control" placeholder="Nama">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                </div> -->

                @if (session('status'))
                    <div class="alert alert-success">
                    {{session('status')}}
                    </div>
                @endif 
                
                <table class="table">
                    <thead class="thead-blue">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Desa</th>
                                <th scope="col">Sehat</th>
                                <th scope="col">Sakit</th>
                                <th scope="col">Dirawat</th>
                                <th scope="col">Sembuh</th>     
                                <th scope="col">Zona</th>     
                            </tr>      
                    </thead>
                <tbody>
                     @foreach($villages as $village)
                     <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$village->Desa}}</td>
                            <td>{{$village->Sehat}}</td>
                            <td>{{$village->Sakit}}</td>
                            <td>{{$village->Dirawat}}</td>
                            <td>{{$village->Sembuh}}</td>
                            <td>{{$village->Zona}}</td>
                    </tr>
                    @endforeach
                </tbody>
        </div> 
    </div>
</div>  
</x-template-layout>