<x-template-layout>
<div class ="container">
    <div class="row">
        <div class="col-10">
                <h1 class="text-3xl text-black pb-6">Detail Inveksi Covid-19 Per-Desa di Indonesia</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$place->Desa}}</h5>
                        <h5 class="card-title">{{$place->Kabupaten}}</h5>
                        <p class="card-text">Sehat: {{$place->Sehat}}</p>
                        <p class="card-text">Sakit: {{$place->Sakit}}</p>
                        <p class="card-text">Dirawat: {{$place->Dirawat}}</p>
                        <p class="card-text">Sembuh: {{$place->Sembuh}}</p>
                        <p class="card-text">Zona: {{$place->Zona}}</p>

                        <a href="{{$place->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/places/{{ $place->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="/places" class="card-link">Kembali</a>
                    </div>
                </div>
        </div> 
    </div>
</div>  
</x-template-layout>