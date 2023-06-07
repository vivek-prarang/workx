<html>
<button id="rzp-button1" class="btn btn-outline-dark btn-lg"><i class="fas fa-money-bill"></i> Own Checkout</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "rzp_test_crfOktz7RedFf6",
        "amount": "1000",
        "currency": "INR",
        "description": "Prarang Product",
        "image": "",
        "prefill": {
            "email": "gaurav.kumar@example.com",
            "contact": +919900000000,
        },
        config: {
            display: {
                blocks: {
                    utib: { //name for Axis block
                        name: "ha ha ha ha",
                        instruments: [{
                                method: "card",
                                issuers: ["UTIB"]
                            },
                            {
                                method: "netbanking",
                                banks: ["UTIB"]
                            },
                        ]
                    },
                    other: { //  name for other block
                        name: "Other Payment modes",
                        instruments: [{
                                method: "card",
                                issuers: ["ICIC"]
                            },
                            {
                                method: 'netbanking',
                            }
                        ]
                    }
                },
                // hide: [{
                //     method: "upi"
                // }],
                sequence: ["block.utib", "block.other"],
                preferences: {
                    show_default_blocks: false
                }
            }
        },
        "handler": function(response) {
            alert(response.razorpay_payment_id);
        },
        "modal": {
            "ondismiss": function() {
                if (confirm("Are you sure, you want to close the form?")) {
                    txt = "You pressed OK!";
                    console.log("Checkout form closed by the user");
                } else {
                    txt = "You pressed Cancel!";
                    console.log("Complete the Payment")
                }
            }
        }
    };
    var rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>

</html>