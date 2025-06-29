@extends('layouts.app')

@section('title', 'Detail Mahasiswa - ' . $student->nama)

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">
                    <i class="fas fa-user me-2"></i>
                    Detail Mahasiswa
                </h5>
                <div>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit me-1"></i>
                        Edit
                    </a>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left me-1"></i>
                        Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-id-card me-1 text-primary"></i>
                                NIM
                            </label>
                            <p class="form-control-plaintext">
                                <span class="badge bg-secondary fs-6">{{ $student->nim }}</span>
                            </p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-user me-1 text-primary"></i>
                                Nama Lengkap
                            </label>
                            <p class="form-control-plaintext fs-5 fw-semibold">{{ $student->nama }}</p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-envelope me-1 text-primary"></i>
                                Email
                            </label>
                            <p class="form-control-plaintext">
                                <a href="mailto:{{ $student->email }}" class="text-decoration-none">
                                    {{ $student->email }}
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-graduation-cap me-1 text-primary"></i>
                                Jurusan
                            </label>
                            <p class="form-control-plaintext">
                                <span class="badge bg-info">{{ $student->jurusan }}</span>
                            </p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-phone me-1 text-primary"></i>
                                Nomor Telepon
                            </label>
                            <p class="form-control-plaintext">
                                <a href="tel:{{ $student->no_telp }}" class="text-decoration-none">
                                    {{ $student->no_telp }}
                                </a>
                            </p>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="fas fa-calendar me-1 text-primary"></i>
                                Tanggal Registrasi
                            </label>
                            <p class="form-control-plaintext">
                                {{ $student->created_at->format('d F Y H:i') }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-bold">
                        <i class="fas fa-map-marker-alt me-1 text-primary"></i>
                        Alamat
                    </label>
                    <p class="form-control-plaintext">{{ $student->alamat }}</p>
                </div>
                
                <hr>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        <i class="fas fa-info-circle me-1"></i>
                        Data terakhir diperbarui: {{ $student->updated_at->format('d F Y H:i') }}
                    </div>
                    <div>
                        <form action="{{ route('students.destroy', $student->id) }}" 
                              method="POST" 
                              class="d-inline"
                              onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mahasiswa ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-1"></i>
                                Hapus Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 