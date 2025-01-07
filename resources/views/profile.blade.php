@extends('app')

@section('title', 'Profile - Toko Baju')

@section('content')
    <!-- Profile Section -->
    <section class="section">
        <h2>Profile Owner</h2>
        <p>Informasi singkat tentang Profile Owner.</p>

        <div style="text-align: center; margin-top: 40px;">
            <!-- Foto Profil -->
            <img src="{{ asset('Profile Tia.jpeg') }}" 
                alt="Foto Tia Novita Sari" 
                style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #333;">
            
            <!-- Biodata -->
            <div style="margin-top: 20px; text-align: left; display: inline-block; font-size: 1.1rem;">
                <p><strong>Nama:</strong> Tia Novita Sari</p>
                <p><strong>NIM:</strong> SSI202303311</p>
                <p><strong>Jurusan:</strong> Sistem Informasi</p>
            </div>
        </div>
    </section>
@endsection
