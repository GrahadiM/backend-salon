
<!-- Start FOOTER -->
<footer>
    <div class="footer-bottom">
        <div class="container">
            <!-- <img src="./assets/images/payment.png" alt="payment method" class="payment-img"> -->
            <p class="copyright text-light">
                Copyright &copy; <a href="javascript:void(0)">Rudi Salon & SPA</a> all rights reserved.
            </p>
        </div>
    </div>
</footer>
<!-- End FOOTER -->

<!-- LOGOUT -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!-- LOGOUT -->
