@extends('layout.main')
@section('judul','Tambah Data Schedule')

@section('content')
    {{--    @if ($errors->any())--}}
    {{--        <div class="alert alert-danger">--}}
    {{--            <ul>--}}
    {{--                @foreach ($errors->all() as $error)--}}
    {{--                    <li>{{ $error }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    <form method="post" action="{{url('schedule/insert')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="form-label">Gambar</label>
                            <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" 
                            accept="image/*" onchange="tampilkanPreview(this, 'tampilFoto')">
                            @error('gambar')
                            <span style="color:red; font-wight: 600; font-size: 9pt">{{$message}}</span>
                            @enderror
                            <p></p>
                            <img id="tampilFoto" onerror="this.onerror=null; this.src='https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABLN930GwaMQz.jpg'; " src="" alt="" width="15%">
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('js')

@endpush