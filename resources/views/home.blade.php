@extends('app')

@section('title', 'Home - Toko Baju')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <h1>Selamat datang di Ty.ns Store</h1>
        <p>Temukan koleksi baju terbaik dan terbaru hanya di sini.</p>
        <a <a href="#products" class="btn-cta" style="
    display: inline-block; 
    margin-top: 20px; 
    padding: 10px 20px; 
    background-color: #007bff; 
    color: white; 
    text-decoration: none; 
    border-radius: 5px; 
    font-size: 1rem; 
    font-weight: 500; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    transition: all 0.3s ease-in-out; 
    text-align: center;">
    Belanja Sekarang
</a>
</a>
    </section>

    <!-- Penjelasan Section -->
    <<section class="section" style="padding: 60px 20px; background-color: #f9f9f9;">
    <h2 style="text-align: center; margin-bottom: 20px;">Kenapa Memilih Kami?</h2>
    <p style="text-align: center; margin-bottom: 40px;">Dengan pengalaman bertahun-tahun dalam industri fashion, kami memberikan pilihan terbaik untuk setiap pelanggan.</p>

    <div style="
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        text-align: center;">
        <!-- Varian Produk -->
        <div style="
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <h3 style="margin-bottom: 10px;">Varian Produk</h3>
            <p style="font-size: 1rem; color: #555;">Dari baju kasual hingga formal, kami punya semuanya.</p>
        </div>

        <!-- Layanan Pelanggan -->
        <div style="
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <h3 style="margin-bottom: 10px;">Layanan Pelanggan</h3>
            <p style="font-size: 1rem; color: #555;">Pelayanan pelanggan terbaik dengan pengiriman cepat dan aman.</p>
        </div>

        <!-- Promo Eksklusif -->
        <div style="
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <h3 style="margin-bottom: 10px;">Promo Eksklusif</h3>
            <p style="font-size: 1rem; color: #555;">Nikmati diskon besar dan penawaran menarik setiap bulan.</p>
        </div>
    </div>
</section>


    <!-- Produk Unggulan Section -->
    <section id="products" class="section" style="background-color: #f9f9f9; padding: 40px 20px;">
    <h2 style="margin-bottom: 20px;">Produk Unggulan</h2>
    <p style="margin-bottom: 40px;">Pilihan terbaik untuk gaya Anda.</p>

    <div style="
        display: flex; 
        justify-content: center; 
        gap: 30px; 
        flex-wrap: wrap;">
        <!-- Produk 1 -->
        <div style="
            text-align: center; 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <img src="{{ asset('Aset 1 Tia Novita Sari.jpg') }}" alt="Baju Kasual" style="width: 100%; height: auto; border-radius: 10px;">
            <h3 style="margin: 15px 0 10px;">Baju Kasual</h3>
            <p style="font-size: 1.2rem; font-weight: bold; color: #333;">Rp 150.000</p>
        </div>

        <!-- Produk 2 -->
        <div style="
            text-align: center; 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <img src="{{ asset('Aset 2 Tia Novita Sari.jpg') }}" alt="Baju Formal" style="width: 100%; height: auto; border-radius: 10px;">
            <h3 style="margin: 15px 0 10px;">Baju Formal</h3>
            <p style="font-size: 1.2rem; font-weight: bold; color: #333;">Rp 250.000</p>
        </div>

        <!-- Produk 3 -->
        <div style="
            text-align: center; 
            background: white; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 250px;">
            <img src="{{ asset('Aset 3 Tia Novita Sari.jpg') }}" alt="Baju Santai" style="width: 100%; height: auto; border-radius: 10px;">
            <h3 style="margin: 15px 0 10px;">Baju Santai</h3>
            <p style="font-size: 1.2rem; font-weight: bold; color: #333;">Rp 100.000</p>
        </div>
    </div>
</section>
@endsection

