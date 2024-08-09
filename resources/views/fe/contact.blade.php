@extends('layouts.fe.index')

@section('content')

    <!-- TESTIMONIALS, CTA & SERVICE -->
    <div class="container" style="margin: 100px 0px;">
        <div class="testimonials-box">
            <div class="testimonial"></div>
            <div class="cta-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6058981985348!2d106.98491659999999!3d-6.183467500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6989006c39c8a3%3A0x8aae3f5ccf4cf114!2sRudi%20Salon%20%26%20SPA!5e0!3m2!1sid!2sid!4v1722803443908!5m2!1sid!2sid" width="100%" height="100%" frameborder="0s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- SERVICE -->
            <div class="service">
                <h2 class="title">Our Services</h2>
                <div class="service-container">
                    <a href="javascript:void(0)" class="service-item">
                        <div class="service-icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Call Center</h3>
                            <p class="service-desc">Jam Kerja: 9AM - 9PM</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="service-item">
                        <div class="service-icon">
                            <ion-icon name="arrow-undo-outline"></ion-icon>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Cashback Promo</h3>
                            <p class="service-desc">Untuk Member Baru & Lama</p>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="service-item">
                        <div class="service-icon">
                            <ion-icon name="ticket-outline"></ion-icon>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">Voucher Discount</h3>
                            <p class="service-desc">Untuk Member Baru & Lama</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS, CTA & SERVICE -->

@endsection
