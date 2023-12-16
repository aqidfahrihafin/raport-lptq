@extends('templates.content')
@section('content')

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Pengaturan Tahun Ajaran</h4>
                            <form>
                                <div class="form-group">
                                    <label for="formrow-pimpinan-input">Tahun Aktif</label>
                                    <input type="text" class="form-control" id="formrow-pimpinan-input">
                                </div>
                                <div class="form-group">
                                    <label for="formrow-nip-input">Semester</label>
                                    <input type="text" class="form-control" id="formrow-nip-input">
                                </div>
                                <div align="right">
                                    <button type="submit" class="btn btn-primary  w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

@endsection
