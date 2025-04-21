<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Dineflow Services</h2>
            <h3 class="section-subheading text-muted">Fresh Every Flavor, Fresh Every Sip</h3>
            <!-- Add a new description about the service -->
            <p class="text-muted">
                Dineflow provides a comprehensive platform for finding and managing cafe's. Whether you're a tenant looking for the perfect place to stay or a the one managing multiple cafe's, Dineflow offers the tools you need to simplify the process.
            </p>
        </div>
        <div class="row text-center">
            <!-- Basic Plan -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="my-2">Basic Plan</h4>
                    </div>
                    <div class="card-body">
                        <h5>$19.99/month</h5>
                        <ul class="list-unstyled">
                            <li>List up to 10  items</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicPlanModal">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4 class="my-2">Standard Plan</h4>
                    </div>
                    <div class="card-body">
                        <h5>$49.99/month</h5>
                        <ul class="list-unstyled">
                            <li>List up to 50 items</li>
                        </ul>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#standardPlanModal">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Premium Plan -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <h4 class="my-2">Premium Plan</h4>
                    </div>
                    <div class="card-body">
                        <h5>$99.99/month</h5>
                        <ul class="list-unstyled">
                            <li>List up unlimited  items</li>
                        </ul>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#premiumPlanModal">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Basic Plan Modal -->
<div class="modal fade" id="basicPlanModal" tabindex="-1" aria-labelledby="basicPlanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="basicPlanModalLabel">Basic Plan Subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="basicPlanForm" action="{{ route('subscribe') }}" method="POST">
          @csrf
          <input type="hidden" name="plan_type" value="basic">
          <div class="mb-3">
            <label for="basicName" class="form-label">Name</label>
            <input type="text" class="form-control" id="basicName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="basicEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="basicEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="basicCity" class="form-label">Cafe</label>
            <input type="text" class="form-control" id="basicCity" name="city" required>
          </div>
          <div class="mb-3">
            <label for="basicPaymentMethod" class="form-label">Payment Method</label>
            <select class="form-select" id="basicPaymentMethod" name="payment_method" required>
              <option value="">Select Payment Method</option>
              <option value="credit">Credit Card</option>
              <option value="debit">Debit Card</option>
              <option value="paypal">PayPal</option>
              <option value="other">Other</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Standard Plan Modal -->
<div class="modal fade" id="standardPlanModal" tabindex="-1" aria-labelledby="standardPlanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="standardPlanModalLabel">Standard Plan Subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="standardPlanForm" action="{{ route('subscribe') }}" method="POST">
          @csrf
          <input type="hidden" name="plan_type" value="standard">
          <div class="mb-3">
            <label for="standardName" class="form-label">Name</label>
            <input type="text" class="form-control" id="standardName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="standardEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="standardEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="standardCity" class="form-label">Cafe</label>
            <input type="text" class="form-control" id="standardCity" name="city" required>
          </div>
          <div class="mb-3">
            <label for="standardPaymentMethod" class="form-label">Payment Method</label>
            <select class="form-select" id="standardPaymentMethod" name="payment_method" required>
              <option value="">Select Payment Method</option>
              <option value="credit">Credit Card</option>
              <option value="debit">Debit Card</option>
              <option value="paypal">PayPal</option>
              <option value="other">Other</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Premium Plan Modal -->
<div class="modal fade" id="premiumPlanModal" tabindex="-1" aria-labelledby="premiumPlanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="premiumPlanModalLabel">Premium Plan Subscription</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="premiumPlanForm" action="{{ route('subscribe') }}" method="POST">
          @csrf
          <input type="hidden" name="plan_type" value="premium">
          <div class="mb-3">
            <label for="premiumName" class="form-label">Name</label>
            <input type="text" class="form-control" id="premiumName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="premiumEmail" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="premiumEmail" name="email" required>
          </div>
          <div class="mb-3">
            <label for="premiumCity" class="form-label">Cafe</label>
            <input type="text" class="form-control" id="premiumCity" name="city" required>
          </div>
          <div class="mb-3">
            <label for="premiumPaymentMethod" class="form-label">Payment Method</label>
            <select class="form-select" id="premiumPaymentMethod" name="payment_method" required>
              <option value="">Select Payment Method</option>
              <option value="credit">Credit Card</option>
              <option value="debit">Debit Card</option>
              <option value="paypal">PayPal</option>
              <option value="other">Gcash</option>
            </select>
          </div>
          <button type="submit" class="btn btn-warning">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Add this at the top of your file -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Services Section (keep your existing HTML) -->
<section class="page-section" id="services">
    <!-- Your existing services content -->
</section>

<!-- Modal Forms (keep your existing HTML) -->
<div class="modal fade" id="basicPlanModal" tabindex="-1" aria-labelledby="basicPlanModalLabel" aria-hidden="true">
  <!-- Your existing basic plan modal content -->
</div>

<div class="modal fade" id="standardPlanModal" tabindex="-1" aria-labelledby="standardPlanModalLabel" aria-hidden="true">
  <!-- Your existing standard plan modal content -->
</div>

<div class="modal fade" id="premiumPlanModal" tabindex="-1" aria-labelledby="premiumPlanModalLabel" aria-hidden="true">
  <!-- Your existing premium plan modal content -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Handle form submission for all plans
    $("[id$='PlanForm']").submit(function (event) {
        event.preventDefault();
        const form = $(this);
        const planType = form.find('input[name="plan_type"]').val();
        const formData = form.serialize();

        // Show loading indicator
        Swal.fire({
            title: 'Processing Subscription',
            html: 'Please wait while we set up your account...',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        $.ajax({
            url: form.attr("action"),
            type: "POST",
            data: formData,
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Subscription Successful!',
                    html: `
                        <h4>Welcome to DineFlow ${planType.charAt(0).toUpperCase() + planType.slice(1)} Plan</h4>
                        <p>You can now start listing your cafe items.</p>
                        <div class="alert alert-success mt-3">
                            <strong>Next Steps:</strong>
                            <ul class="text-start">
                                <li>Check your email for confirmation</li>
                                <li>Login to your dashboard</li>
                                <li>Start adding your menu items</li>
                            </ul>
                        </div>
                    `,
                    confirmButtonText: 'Go to Dashboard',
                    confirmButtonColor: '#3085d6',
                    showCancelButton: true,
                    cancelButtonText: 'Stay Here'
                }).then((result) => {
                    form[0].reset();
                    form.closest('.modal').modal('hide');
                    if (result.isConfirmed) {
                        window.location.href = '/dashboard';
                    }
                });
            },
            error: function (xhr) {
                let errorMessage = 'An error occurred during subscription';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).join('<br>');
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                
                Swal.fire({
                    icon: 'error',
                    title: 'Subscription Failed',
                    html: errorMessage,
                    confirmButtonText: 'Try Again'
                });
            }
        });
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
