@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <section class="contact-section">
        <div class="contact-container">

            <!-- MAP -->
            <div class="map-container">
                <iframe
                    src="https://maps.app.goo.gl/Q9yddyzkwYPwjGfW6"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <!-- KOTAK INFO -->
            <div class="info-container">

                <div class="info-box">
                    <h3>📞 Telepon</h3>
                    <p>Senin - Jumat, 10.00-17.00</p>
                    <a href="tel:02263734856"></a>
                </div>

                <div class="info-box">
                    <h3>📧 Email</h3>
                    <p>Respon dalam 2 jam</p>
                    <a href="mailto:mailbox@icreativelabs.com">mailbox@icreativelabs.com</a>
                </div>

                <div class="info-box">
                    <h3>📍 Kunjungi Kantor Kami</h3>
                    <p>Maspion IT Lt.1 Blok C</p>
                    <a href="#">Lihat di Maps →</a>
                </div>

            </div>
        </div>
    </section>
</body>
</html>
@endsection
