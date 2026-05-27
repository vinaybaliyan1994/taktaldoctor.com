
@extends('frontend.layout.app')
@section('content')
<section class="contact-section py-5 py-lg-6 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="display-5 fw-bold text-success">
        Contact Us
      </h1>
      <p class="lead text-muted">
        Have a question or need support? Reach out to us — we’re here to help.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="contact-info-card p-4 p-md-5 rounded-4 shadow-lg h-100 bg-white border-0">
          <h2 class="h3 mb-4 text-primary">
            Get in touch
          </h2>
          <p class="text-secondary mb-4">
            If you have queries about services, pricing, or technical support, contact us:
          </p>

          <div class="list-group list-group-flush mb-4">
            <div class="list-group-item d-flex align-items-start p-3 border-0">
              <div class="icon-square me-3 flex-shrink-0">
                <i class="fas fa-map-marker-alt fa-lg text-success"></i>
              </div>
              <div>
                <h5 class="fw-bold mb-0">Office</h5>
                <p class="mb-0 text-muted">
                  2ND Floor, Vinayak Complex, Sakarpur, Computer Market, Near Nirman Vihar Metro Station, Delhi-110092
                </p>
              </div>
            </div>

            <div class="list-group-item d-flex align-items-start p-3 border-0">
              <div class="icon-square me-3 flex-shrink-0">
                <i class="fas fa-phone-alt fa-lg text-success"></i>
              </div>
              <div>
                <h5 class="fw-bold mb-0">Phone</h5>
                <a href="tel:+918071387288" class="text-decoration-none text-dark d-block">+918071387288</a>
              </div>
            </div>

            <div class="list-group-item d-flex align-items-start p-3 border-0">
              <div class="icon-square me-3 flex-shrink-0">
                <i class="fas fa-envelope fa-lg text-success"></i>
              </div>
              <div>
                <h5 class="fw-bold mb-0">Email</h5>
                <a href="mailto:doctortatkal@gmail.com"
                  class="text-decoration-none text-dark d-block">doctortatkal@gmail.com</a>
                <small class="text-muted">Support / Refunds:
                  <a href="mailto:doctortatkal@gmail.com"
                    class="text-decoration-none text-muted">doctortatkal@gmail.com</a>
                  |
                  <a href="tel:+918071387288" class="text-decoration-none text-muted">+918071387288</a></small>
              </div>
            </div>
          </div>

          <div class="mt-4 pt-3 border-top social-icons-modern">
            <a href="#" class="social-icon-link me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#" class="social-icon-link me-3"><i class="fab fa-instagram fa-lg"></i></a>
            <a href="#" class="social-icon-link me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
            <a href="#" class="social-icon-link me-3"><i class="fab fa-twitter fa-lg"></i></a>
            <a href="#" class="social-icon-link"><i class="fab fa-youtube fa-lg"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact-form-card p-4 p-md-5 rounded-4 shadow-lg h-100 bg-white border-0">
          <h2 class="h3 mb-4 text-primary">
            Send us a message
          </h2>

          <form id="contactFormModern" action="#" method="post">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="abc" required />
              <label for="name">Name</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="abc@mail.com" required />
              <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="99999 99999" />
              <label for="phone">Phone</label>
            </div>

            <div class="form-floating mb-4">
              <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"
                style="height: 150px" required></textarea>
              <label for="message">Message</label>
            </div>

            <button type="submit" class="btn btn-success btn-lg w-100 send-btn">
              Send Message
              <span class="spinner-border spinner-border-sm d-none ms-2" role="status" aria-hidden="true"></span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
@push('scripts')
<script>
  document
    .getElementById("contactFormModern")
    ?.addEventListener("submit", function (e) {
      e.preventDefault();

      const form = this;
      const sendBtn = form.querySelector(".send-btn");
      const spinner = form.querySelector(".spinner-border");

      // Show spinner and disable button
      sendBtn.disabled = true;
      spinner.classList.remove("d-none");
      sendBtn.innerHTML =
        'Sending... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';

      // Simulate a network request (replace with actual AJAX/Fetch call)
      setTimeout(() => {
        // Hide spinner and enable button
        spinner.classList.add("d-none");
        sendBtn.disabled = false;
        sendBtn.innerHTML = "Send Message";

        // Show success message (using Bootstrap Alert/Toast in a real scenario)
        alert(
          "Thank You So much!"
        );
        form.reset();
      }, 2000); // 2 second delay for simulation
    });
</script>
  
@endpush