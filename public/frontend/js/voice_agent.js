(function () {
    "use strict";

    window.addEventListener("load", function () {

        var form = document.querySelector(".hero__form");
        if (!form) return;

        var msg = document.getElementById("msg");
        var btn = form.querySelector("#btn");
        var phoneInput = form.querySelector("#phone");

        // Optional UI enhancements
        var ctaPill = form.querySelector(".hero__cta-pill");
        if (ctaPill) {
            form.addEventListener("focusin", function () {
                ctaPill.classList.add("is-focused");
            });
            form.addEventListener("focusout", function () {
                setTimeout(function () {
                    if (!form.contains(document.activeElement)) {
                        ctaPill.classList.remove("is-focused");
                    }
                }, 0);
            });
        }

        // Submit handler
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            var phone = phoneInput.value.trim();

            // Basic validation (UX only)
            if (!/^[6-9]\d{9}$/.test(phone)) {
                msg.innerText = "Enter a valid mobile number";
                msg.style.color = "red";
                return;
            }

            // UI state
            msg.innerText = "Connecting your call...";
            msg.style.color = "#444";
            btn.disabled = true;

            fetch('/demo/callback', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ phone: phone })
            })
            .then(function () {
                // Always show success (clean UX)
                setTimeout(function () {
                    msg.innerText = "You will receive a call shortly";
                    msg.style.color = "green";
                }, 800);
            })
            .catch(function () {
                // Do NOT expose errors to user
                msg.innerText = "You will receive a call shortly";
                msg.style.color = "green";
            })
            .finally(function () {
                btn.disabled = false;
            });
        });
        

    });

})();