@extends('app')

@section('title', 'About - Toko Baju')

@section('content')
    <!-- About Section -->
    <section class="section">
        <h2>Tentang Owner</h2>
        <p>Mengenal lebih dekat dengan Tia Novita Sari.</p>

        <div style="text-align: center; margin-top: 40px;">
            <!-- Foto dengan bentuk lingkaran -->
            <img src="{{ asset('About Tia.jpeg') }}" 
                alt="Foto Tia Novita Sari" 
                style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 3px solid #333;">
            
            <!-- Biodata -->
            <div style="margin-top: 20px; text-align: left; display: inline-block;">
                <p><strong>Nama:</strong> Tia Novita Sari</p>
                <p><strong>Jurusan:</strong> Sistem Informasi</p>
                <p><strong>Universitas:</strong> Universitas STMIK</p>
                <p><strong>Tentang Saya:</strong></p>
                <p>
                    Saya adalah mahasiswi Sistem Informasi yang memiliki minat dalam pengembangan sistem berbasis teknologi. 
                    Berkomitmen untuk terus belajar dan memberikan kontribusi positif melalui keahlian saya di bidang teknologi informasi.
                </p>
            </div>
        </div>
    </section>
@endsection
