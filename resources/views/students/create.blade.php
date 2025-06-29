@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    <i class="fas fa-plus me-2"></i>
                    Tambah Data Mahasiswa
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">
                                <i class="fas fa-id-card me-1"></i>
                                NIM <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control @error('nim') is-invalid @enderror" 
                                   id="nim" 
                                   name="nim" 
                                   value="{{ old('nim') }}" 
                                   placeholder="Masukkan NIM"
                                   maxlength="20"
                                   required>
                            @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">
                                <i class="fas fa-user me-1"></i>
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text" 
                                   class="form-control @error('nama') is-invalid @enderror" 
                                   id="nama" 
                                   name="nama" 
                                   value="{{ old('nama') }}" 
                                   placeholder="Masukkan nama lengkap"
                                   maxlength="100"
                                   required>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-1"></i>
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="contoh@email.com"
                                   maxlength="100"
                                   required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="jurusan" class="form-label">
                                <i class="fas fa-graduation-cap me-1"></i>
                                Jurusan <span class="text-danger">*</span>
                            </label>
                            <select class="form-select @error('jurusan') is-invalid @enderror" 
                                    id="jurusan" 
                                    name="jurusan" 
                                    required>
                                <option value="">Pilih Jurusan</option>
                                <option value="Teknik Informatika" {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                                <option value="Teknik Industri" {{ old('jurusan') == 'Teknik Industri' ? 'selected' : '' }}>Teknik Industri</option>
                                <option value="Desain Komunikasi Visual" {{ old('jurusan') == 'Desain Komunikasi Visual' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
                                <option value="Bisnis Digital" {{ old('jurusan') == 'Bisnis Digital' ? 'selected' : '' }}>Bisnis Digital</option>
                                <option value="Manajemen Retail" {{ old('jurusan') == 'Manajemen Retail' ? 'selected' : '' }}>Manajemen Retail</option>
                            </select>
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">
                            <i class="fas fa-map-marker-alt me-1"></i>
                            Alamat <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                  id="alamat" 
                                  name="alamat" 
                                  rows="3" 
                                  placeholder="Masukkan alamat lengkap"
                                  maxlength="255"
                                  required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">
                            <i class="fas fa-phone me-1"></i>
                            Nomor Telepon <span class="text-danger">*</span>
                        </label>
                        <input type="text" 
                               class="form-control @error('no_telp') is-invalid @enderror" 
                               id="no_telp" 
                               name="no_telp" 
                               value="{{ old('no_telp') }}" 
                               placeholder="081234567890"
                               maxlength="15"
                               required>
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-1"></i>
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>
                            Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 