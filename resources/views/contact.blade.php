@extends('app')

@section('title', 'Contact - Toko Baju')

@section('content')
    <!-- Contact Section -->
    <section class="section">
        <h2>Kontak Kami</h2>
        <p>Hubungi kami melalui informasi di bawah ini untuk mendapatkan informasi menarik seputar Model Baju Di toko:</p>

        <div style="text-align: center; margin-top: 40px;">
            <div style="display: inline-block; text-align: left; font-size: 1.1rem;">
                <!-- Email -->
                <p><strong>Email:</strong> <a href="mailto:tia.novita.sari178@gmail.com" style="color:rgb(0, 0, 0); text-decoration: none;">tia.novita.sari178@gmail.com</a></p>
                
                <!-- Lokasi -->
                <p><strong>Lokasi:</strong> Jl. Kalikabong , Purbalingga Kota</p>
                
                <!-- Nomor Telepon -->
                <p><strong>:</strong> <a href="tel:+6281234567890" style="color:rgb(0, 0, 0); text-decoration: none;">+62 856-4384-1241</a></p>
            </div>
        </div>

        <!-- Peta Lokasi (Opsional) -->
        <div style="margin-top: 40px; text-align: center;">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127389.52274752865!2d109.44165029224616!3d-7.528229379267425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68a27f0eae69bb%3A0xc6bc3b8e7d360ed8!2sKalikabong%2C%20Kec.%20Kalikabong%2C%20Kab.%20Purbalingga%2C%20Jawa%20Tengah%2C%20Indonesia!5e0!3m2!1sen!2sid!4v1696851396841!5m2!1sen!2sid" 
        width="600" 
        height="450" 
        style="border: 0; border-radius: 10px;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

    </section>
@endsection
