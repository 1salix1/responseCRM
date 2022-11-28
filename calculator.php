<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campaign Calculator</title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="icon" href="./assets/images/favicon.jpg" sizes="32x32" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
    </script>
    <script defer src="./assets/js/slick.min.js"></script>
    <script defer type="text/javascript">
        /* <![CDATA[ */
        var ajaxUrl = {"url":"http://responsecrm.com/wp-admin/admin-ajax.php"};
        /* ]]> */
    </script>
    <script defer src="./assets/js/control.js"></script>
    <script defer src="./assets/js/intercom.js"></script>

</head>
<body>
<div class="wrapper">
    <div class="wrapper__start grid">
        <div class="grid__md ">
            <div class="header grid__header" id="header">
                <a class="header__logo" href="./">
                    <img src="./assets/images/logo.png">
                </a>
                <div class="header__button" id="header__button" onclick="toggleMenu()"><span></span></div>
                <div class="header__menu" id="header__menu">
                        <li class="header__link header__phone">
                            <a href="tel:866-866-9276">866-866-9276</a>
                        </li>
                        <li class="header__link header__login">
                            <a href="https://crm.responsecrm.com" target="_blank">Log in</a>
                        </li>
                        <li class="header__link header__has_submenu header__submenu_hide">
                        <a href="./">Solutions</a>
                        <ul class="header__submenu">
                            <li class="header__sublink"><a href="platformPage.html">ResponseCRM</a></li>
                            <li class="header__sublink"><a href="responsePay.html">ResponsePay</a></li>
                            <li class="header__sublink"><a href="faq.html">FAQ</a></li>
                            <li class="header__sublink"><a href="new-enhancements.php">New Enhancements</a></li>
                        </ul>
                        </li>
                        <li class="header__link header__has_submenu header__submenu_hide">
                            <a href="./">Ecosystem</a>
                            <ul class="header__submenu">
                                <li class="header__sublink"><a href="consultants.html">Certified Consultants</a></li>
                                <li class="header__sublink"><a href="integrations.html">Integrations</a></li>

                            </ul>
                        </li>
                        <li class="header__link">
                            <a href="pricing.html">Pricing</a>
                        </li>
                        <li class="header__link header__submenu_shown">
                            <a href="https://crm.responsecrm.com" target="_blank">Dashboard</a>
                        </li>
                        <li class="header__link header__has_submenu header__submenu_hide">
                            <a href="./">News</a>
                            <ul class="header__submenu header__submenu-haschild">
                                <li class="header__sublink"><a href="https://blog.responsecrm.com/">Blog</a></li>
                                <li class="header__sublink header__sublink-haschild">
                                    <a href="#">Customer Success</a>
                                    <ul class="header__submenu header__submenu-child">
                                        <li class="header__sublink"><a href="study-case.php">CS #1: Revenue Soars</a></li>
                                        <li class="header__sublink"><a href="study-case-access2000.php">CS #2: Access2000</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <a href="#form" class="select">
                            <p class="select__text">SIGN UP</p>
                            <button class="select__button"></button>
                        </a>
                    </div>
            </div>
        </div>

        <div class="grid__md grid__section_calculator">
            <h3 class="calculator__header">Campaign Calculator</h3>
        </div>

        <div class="grid__md ">
            <section class="calculator-container">
                <div class="container">
                    <div class="row calculator__fields_and_results">
                        <div class="col-md-8">
                            <div class="calculator" id="calculator">
                                <form method="post" class="calculator__form calculator-form form-horizontal">
                                    <div class="row row-inline calculator__items">
                                        <div class="col-md-8">
                                            <fieldset>
                                                <div class="row_break">
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mainProductCustomers" class="control-label">Customers Per Day</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mainProductCustomers" id="mainProductCustomers" class="form-control" required="">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 100</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mainProductSignupAmount" class="control-label">Sign-up Amount</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mainProductSignupAmount" id="mainProductSignupAmount" class="form-control" required="">
                                                                    <span class="icon-sign">$</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 4.95</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mainProductShippingCost" class="control-label">Shipping/Order</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mainProductShippingCost" id="mainProductShippingCost" class="form-control" required="">
                                                                    <span class="icon-sign">$</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 3.50</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mainProductCogs" class="control-label">COGS</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mainProductCogs" id="mainProductCogs" class="form-control" required="">
                                                                    <span class="icon-sign">$</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 3.00</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mainProductSignupRefundRatio" class="control-label">Sign-up Refund</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mainProductSignupRefundRatio" id="mainProductSignupRefundRatio" class="form-control" required="">
                                                                    <span class="icon-sign">%</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 3.5</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="mediaCostPerCustomer" class="control-label">Media Cost/Order</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="mediaCostPerCustomer" id="mediaCostPerCustomer" class="form-control" required="">
                                                                    <span class="icon-sign">$</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 45.00</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="signupChargeback" class="control-label">Sign-up Chargeback</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="signupChargeback" id="signupChargeback" class="form-control" required="">
                                                                    <span class="icon-sign">%</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 0.75</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="processingFees" class="control-label">Processing Fees</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="processingFees" id="processingFees" class="form-control" required="">
                                                                    <span class="icon-sign">%</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 5.5</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="reserveAmount" class="control-label">Reserve Amount</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="reserveAmount" id="reserveAmount" class="form-control" required="">
                                                                    <span class="icon-sign">%</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 10</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="reserveDurration" class="control-label">Reserve Duration (Months)</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="reserveDurration" id="reserveDurration" class="form-control" required="">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 6</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="avereagePerCustomerCsFees" class="control-label">Average Per Customer (CS) Fees</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="avereagePerCustomerCsFees" id="avereagePerCustomerCsFees" class="form-control" required="">
                                                                    <span class="icon-sign">$</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 1.50</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-7">
                                                            <label for="campaignLongevity" class="control-label">Campaign Longevity (Months)</label>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row calculator-form__fields">
                                                                <div class="col-md-6">
                                                                    <input type="text" name="campaignLongevity" id="campaignLongevity" class="form-control" required="">
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label class="control-label">ex: 12</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="calculator-form__recurring-container">
                                                        <p>Sign-up Reccuring</p>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="mainProductGestation" class="control-label">First Billing (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="mainProductGestation" id="mainProductGestation" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 15</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="firstBillingShipped" class="control-label">Shipped</label>
                                                            </div>
                                                            <!--                                                <input type="hidden" name="firstBillingShipped" value="0"> -->
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_checkbox">
                                                                    <div class="col-md-12">
                                                                        <label for=""><input type="checkbox" name="sShipped" id="sShipped" value="on"> leave unchecked if product is not shipped</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="mainProductRetentionRatio" class="control-label">First Billing Retention</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="mainProductRetentionRatio" id="mainProductRetentionRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 85</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="mainProductContinuityAmount" class="control-label">First Billing Amount</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="mainProductContinuityAmount" id="mainProductContinuityAmount" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 89.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="mainProductContinuityRefundRatio" class="control-label">First Billing Refund</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="mainProductContinuityRefundRatio" id="mainProductContinuityRefundRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 10</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="firstContinuityCbRatio" class="control-label">First Billing Chargeback</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="firstContinuityCbRatio" id="firstContinuityCbRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 2.5</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="subsequentContinuityCycle" class="control-label">Next Billing (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="subsequentContinuityCycle" id="subsequentContinuityCycle" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 30</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellGestation" class="control-label">Billing Frequency (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellGestation" id="upsellGestation" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 30</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellRetentionRatio" class="control-label">Next Billing Retention</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellRetentionRatio" id="upsellRetentionRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 85</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellContinuityAmount" class="control-label">Next Billing Amount</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellContinuityAmount" id="upsellContinuityAmount" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 89.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellContinuityRefund" class="control-label">Next Billing Refund</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellContinuityRefund" id="upsellContinuityRefund" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 10</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="continuityRebillCbRatio" class="control-label">Next Billing Chargeback</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="continuityRebillCbRatio" id="continuityRebillCbRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 2.5</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="" class="control-label calculator__add-recurring" id="addRecurring">Add Recurring</label>
                                                        </div>
                                                    </div>
                                                    <div class="calculator-form__upsell-container">
                                                        <p>Upsell</p>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellRatio" class="control-label">Upsell</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellRatio" id="upsellRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 80</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellAmount" class="control-label">Upsell Amount</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellAmount" id="upsellAmount" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 4.97</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellShippingCost" class="control-label">Upsell Shipping/Order</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellShippingCost" id="upsellShippingCost" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 3.50</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellCogs" class="control-label">Upsell COGS</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellCogs" id="upsellCogs" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 3.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellSignupRefundRatio" class="control-label">Upsell Refund</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellSignupRefundRatio" id="upsellSignupRefundRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 3.5</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellMediaCostPerCustomer" class="control-label">Upsell Media Cost/Order</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellMediaCostPerCustomer" id="upsellMediaCostPerCustomer" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 45.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellChargeback" class="control-label">Upsell Chargeback</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellChargeback" id="upsellChargeback" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 0.75</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="" class="control-label calculator__add-upsell" id="addUpsell">Add Upsell</label>
                                                        </div>
                                                    </div>

                                                    <div class="calculator-form__upsell-recurring-container">
                                                        <p>Upsell Reccuring</p>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellMainProductGestation" class="control-label">First Billing (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellMainProductGestation" id="upsellMainProductGestation" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 15</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellFirstBillingShipped" class="control-label">Shipped</label>
                                                            </div>
                                                            <!--                                                <input type="hidden" name="upsellFirstBillingShipped" value="yyy">-->
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_checkbox">
                                                                    <div class="col-md-12">
                                                                        <label for=""><input type="checkbox" name="uShipped" id="uShipped"> leave unchecked if product is not shipped</label>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellMainProductRetentionRatio" class="control-label">First Billing Retention</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellMainProductRetentionRatio" id="upsellMainProductRetentionRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 85</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellMainProductContinuityAmount" class="control-label">First Billing Amount</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellMainProductContinuityAmount" id="upsellMainProductContinuityAmount" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 89.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellMainProductContinuityRefundRatio" class="control-label">First Billing Refund</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellMainProductContinuityRefundRatio" id="upsellMainProductContinuityRefundRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 10</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellFirstContinuityCbRatio" class="control-label">First Billing Chargeback</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellFirstContinuityCbRatio" id="upsellFirstContinuityCbRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 2.5</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellSubsequentContinuityCycle" class="control-label">Next Billing (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellSubsequentContinuityCycle" id="upsellSubsequentContinuityCycle" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 30</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellUpsellGestation" class="control-label">Billing Frequency (Days)</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellUpsellGestation" id="upsellUpsellGestation" class="form-control">
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 30</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellUpsellRetentionRatio" class="control-label">Next Billing Retention</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellUpsellRetentionRatio" id="upsellUpsellRetentionRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 85</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellUpsellContinuityAmount" class="control-label">Next Billing Amount</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-dollar">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellUpsellContinuityAmount" id="upsellUpsellContinuityAmount" class="form-control">
                                                                        <span class="icon-sign">$</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 89.00</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellUpsellContinuityRefund" class="control-label">Next Billing Refund</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellUpsellContinuityRefund" id="upsellUpsellContinuityRefund" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 10</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-7">
                                                                <label for="upsellContinuityRebillCbRatio" class="control-label">Next Billing Chargeback</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="row calculator-form__fields calculator-form__fields_is-sign calculator-form__fields_is-sign-percent">
                                                                    <div class="col-md-6">
                                                                        <input type="text" name="upsellContinuityRebillCbRatio" id="upsellContinuityRebillCbRatio" class="form-control">
                                                                        <span class="icon-sign">%</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="control-label">ex: 2.5</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="" class="control-label calculator__add-upsell-recurring" id="addUpsellRecurring">Add Upsell Recurring</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <div class="form-group inlinefix">
                                                    <button type="submit" class="button button_theme_pure u-content__button">Calculate</button>
                                                    <div class="calculator__loader">
                                                        <img src="./assets/images/loader-calc.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="calculator__message calculator__message_error"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="outcome" id="outcome">
                                <p>RESULTS</p>
                                <table class="table table-hover table-bordered">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="grid__md grid__section_calculator_button">
            <div class="responseCRM_Integrations grid__deep-section2_spaced">
                <a href="#form" target="_blank" class="button button_theme_pure calculator__button">Create My Accout Now</a>
            </div>
        </div>

    </div>

    <div class="grid wrapper__ovals">
        <div class="grid__md grid__md_pad_bottom">
            <div class="events">
                <h3 class="events__header">Events</h3>
                <div class="events__items events-layout">
                    <a target="_blank" href="https://www.affiliatesummit.com/west" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/events/aff_summit_west.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Affiliate Summit West</h3>
                            Nov 1-3, 2021, 2021<br>
                            Las Vegas, NV
                        </div>
                    </a>
                    <a target="_blank" href="https://www.affiliatesummit.com/east" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/events/aff_summit_east.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Affiliate Summit East</h3>
                            New York, NY
                        </div>
                    </a>
                    <a target="_blank" href="https://www.trafficandconversionsummit.com" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/events/trafic_and_conversion_event.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Traffic & Conversion</h3>
                            September 13-15, 2021<br>
                            San Diego, CA
                        </div>
                    </a>
                    <a target="_blank" href="https://www.affiliatesummit.com/euro" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/events/aff_summit_europe.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Affiliate Summit Europe</h3>
                            Amsterdam
                        </div>
                    </a>
                    <a target="_blank" href="https://affiliateworldconferences.com/europe/" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/barcelona.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Affiliate World Europe</h3>
                            Barcelona, Spain
                        </div>
                    </a>
                    <a target="_blank" href="https://affiliateworldconferences.com/asia/" class="events__item">
                        <div class="events__image" style="background-image: url('assets/images/events/aff_world_asia.png')"></div>
                        <div class="events__divider"></div>
                        <div class="events__description">
                            <h3>Affiliate World Asia</h3>
                            Bangkok, Thailand
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper__simple grid grid__md_pad">
        <div class="grid__md">
            <div class="getIn-or-createAccount">
                <div class="title">
                    <p class="title__headline">Get in touch</p>
                    <a href="contact.html" class="button button_theme_transparent u-content__button button_contact-sales">Contact Sales</a>
                </div>
                <div id="form" class="form">

                    <h3 class="form__header">or Create an Account</h3>
                    <form method="post" id="registration">
                            <div class="form__row">
                                <div class="form__column-half">
                                    <label class="form__label">Name</label>
                                    <input type="text" name="name" class="form__input" placeholder="Full Name">
                                    <div class="form__error"></div>
                                </div>
                                <div class="form__column-half">
                                    <label class="form__label">E-mail</label>
                                    <input type="email" name="email" class="form__input" placeholder="E-mail">
                                    <div class="form__error"></div>
                                </div>
                            </div>
                            <div class="form__row">
                                <div class="form__column-half">
                                    <label class="form__label">Skype</label>
                                    <input type="text" name="skype" class="form__input" placeholder="Skype">
                                    <div class="form__error"></div>
                                </div>
                                <div class="form__column-half">
                                    <label class="form__label">Phone</label>
                                    <input type="phone" name="phone" class="form__input" placeholder="Phone">
                                    <div class="form__error"></div>
                                </div>
                            </div>
                            <!--<div class="form__row">
                                <div class="form__column-full">
                                    <label class="form__label">Why are You interested in response CRM ?</label>
                                    <input type="text" name="reason" class="form__input" placeholder="I Like to code, I’m a tracker..">
                                    <div class="form__error"></div>
                                </div>
                            </div>-->
                            <div class="form__checkbox_container">
                            <input type="checkbox" name="isAgree" id="isAgree2" class="form__checkbox"><label for="isAgree2">Keep me up to date on news and exclusive offers</label>
                        </div>
                        <button type="submit" class="button button_theme_orange from__button">
                            Create Account
                        </button>
                        </form>
                </div>
            </div>
        </div>
        <div class="grid__md grid__md_pad grid__twitter">
            <div class="twitter">
                <div class="all_twitts" style="display: none"></div>
                <div class="twitter__scroll-area">
                    <div class="twitter__post">
                        <div class="twitter__logo-title">
                            <div class="twitter__logo" style="background-image: url('assets/images/twitter-logo.png')"></div>
                            <div class="twitter__title">
                                <a target="_blank" href="https://twitter.com/ResponseCRMllc">ResponseCRM</a>
                                <h5>@ResponseCRMllc</h5>
                            </div>
                            <div class="twitter__logotype"></div>
                        </div>
                        <div class="twitter__text">
                        </div>
                        <div class="twitter__icons-date">
                            <div class="twitter__icons">
                            </div>
                            <div class="twitter__date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper__get-in-touch grid">
        <div class="grid__md grid__title">

            <div class="previews">
                <div class="preview">
                    <a href="https://blog.responsecrm.com/responsecrm-integrates-with-bluesnap/" class="preview__logo preview" style="background-image: url('./assets/images/blueSnap.jpg');"></a>
                    <p class="preview__header">
                        ResponseCRM integrates with BlueSnap
                    </p>
                    <p class="preview__description">
                        With everyone moving around at a much faster pace these days, it's hard to keep up. Everything is now, now, now - especially with purchasing, because no one wants to wait for processing. Well, we have some very exciting news for you, the founders
                        <a href="https://blog.responsecrm.com/responsecrm-integrates-with-bluesnap/">&nbsp;Continue reading  ></a>
                    </p>
                </div>
                <div class="preview">
                    <a href="https://blog.responsecrm.com/responsecrm-integrates-with-square/" class="preview__logo" style="background-image: url('./assets/images/greenBox.jpg');"></a>
                    <p class="preview__header">
                        ResponseCRM integrates with Square
                    </p>
                    <p class="preview__description">
                        Square, a leading provider of financial services, recently introduced CBD processing to the masses and ResponseCRM is glad to be at the forefront, providing you the full power of Square’s processing capabilities within the CRM.
                        <a href="https://blog.responsecrm.com/responsecrm-integrates-with-square/">&nbsp;Continue reading  ></a>
                    </p>
                </div>
                <div class="preview">
                    <a href="https://blog.responsecrm.com/responsecrm-integrates-with-pinless-debit-provider/" class="preview__logo" style="background-image: url('./assets/images/bridgePay.png');"></a>
                    <p class="preview__header">
                        ResponseCRM Integrates with Pinless Debit provider.
                    </p>
                    <p class="preview__description">
                        At ResponseCRM, we know you live a busy lifestyle and need your transactions to run swift and painlessly throughout your day, that’s why we added Pinless Debit
                        <a href="https://blog.responsecrm.com/responsecrm-integrates-with-pinless-debit-provider/">&nbsp;Continue reading  ></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="grid__md">
                <div class="footer__bottom">
                    <div class="footer__links">
                        <div>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="terms-conditions.html">Terms & Conditions</a>
                            </p>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="pci-policy.html">PCI Policy</a>
                            </p>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="privacy-policy.html">Privacy Policy</a>
                            </p>
                        </div>
                        <div>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="refund-policy.html">Refund Policy</a>
                            </p>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="contract-information.html">Contract Information</a>
                            </p>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="contact.html">Contact Us</a>
                            </p>
                            <p class="footer__link footer__link_theme_dark">
                                <a href="faq.html">FAQ</a>
                            </p>
                        </div>
                    </div>

                    <div class="footer__support">
                        <div class="footer__support_text">
                            We've got your back 24 / 7 / 365
                        </div>
                        <div class="footer__icons">
                            <div class="footer__icons_block">
                                <div class="footer__icon"> <a href="skype:darrenlunt?call" title="Skype Us"><i class="icon icon-skype"></i></a>
                                </div>
                                <div class="footer__icon"> <a href="https://join.me/responsecrm" id="support__message" target="_blank" title="Live Sales Chat"><i class="icon icon-bubbles"></i></a>
                                </div>
                                <div class="footer__icon"> <a href="mailto:info@responsecrm.com" title="Email Us"><i style="margin-left: -3px;" class="icon icon-mail"></i></a>
                                </div>


                                <div class="footer__icon"> <a target="_blank" href="https://www.linkedin.com/company/response-crm-llc/" title="Our Linkedin"><i class="icon icon-linkedin"></i></a>
                                </div>
                                <div class="footer__icon"> <a target="_blank" href="https://twitter.com/responsecrmllc?lang=en" title="Our Twitter"><i class="icon icon-twitter"></i></a>
                                </div>
                                <div class="footer__icon"> <a target="_blank" href="https://www.facebook.com/ResponseCRM/" title="Our Facebook"><i class="icon icon-facebook2"></i></a>
                                </div>
                            </div>

                            <div class="footer__awards">
                                <div class="award">
                                    <img class="award__image" src="./assets/images/awards/affy-award.png">
                                </div>
                                <div class="award award-large">
                                    <img class="award__image" src="./assets/images/awards/sha_codie_finalist.png">
                                </div>
                                <div class="award">
                                    <img class="award__image" src="./assets/images/awards/stevie_new_logo.png">
                                </div>
                                <div class="award">
                                    <img class="award__image" src="./assets/images/awards/pci-dss-lvl-1.png">
                                </div>
                            </div> 
                            <!--<div class="footer__location">PMB 303<br>425 Carr 693, Ste. 1<br>Dorado, PR, 00646</div>-->
                        </div>

                    </div>
                </div>
               
                <div class="footer__we_accept">
                    <!--ResponseCRM is a trademark of Response Media Group, LLC-->
                </div>
            </div>
        </div>
    </div>
</div>

<script defer type="text/javascript">
    jQuery(document).ready(function() {
            jQuery('.sign-up-hide-form').on('click', function(e) {
                    var formDemoContainer=jQuery('#formDemoContainer');
                    if(formDemoContainer.hasClass('show-form'))return;
                    jQuery('#shortDescriptionDemoContainer').addClass('hide-description');
                    formDemoContainer.addClass('show-form');
                }
            );
            jQuery('.view-demo-show-video').on('click', function(e) {
                    e.preventDefault();
                    var containerWithVideo=jQuery('.container-with-video');
                    if(!containerWithVideo.hasClass('show-video'))containerWithVideo.addClass('show-video');
                }
            );
            var video;
            window._wq=window._wq||[];
            _wq.push( {
                    id:"abc", onReady:function(video) {
                        video=video;
                    }
                }
            );
            jQuery('.container-with-video .video-youtube .close-video').on('click', function(e) {
                    e.preventDefault();
                    var containerWithVideo=jQuery('.container-with-video');
                    if(containerWithVideo.hasClass('show-video')) {
                        containerWithVideo.removeClass('show-video');
                        video.pause();
                    }
                }
            );
        }

    );
    jQuery(function(jQuery) {
            (function() {
                    var calculatorElement=jQuery('#calculator');
                    var formElement=calculatorElement.find('.calculator__form');
                    var loaderElement=formElement.find('.calculator__loader');
                    var messageElement=formElement.find('.calculator__message');
                    var fieldsetElement=formElement.find('fieldset');
                    var outcomeElement=jQuery('#outcome');
                    var calculatorFormElement=calculatorElement.find('.calculator-form');
                    var recurringContainerElement=calculatorFormElement.find('.calculator-form__recurring-container');
                    var upsellRecurringContainerElement=calculatorFormElement.find('.calculator-form__upsell-recurring-container');
                    var upsellContainerElement=calculatorFormElement.find('.calculator-form__upsell-container');
                    var addRecurringElement=jQuery('#addRecurring');
                    var addUpsellElement=jQuery('#addUpsell');
                    var addUpsellRecurringElement=jQuery('#addUpsellRecurring');
                    var showTotalIncomeElement=jQuery('#showTotalIncome');
                    var showTotalCostsElement=jQuery('#showTotalCosts');
                    var incomeChildElements=jQuery('.income-child');
                    var costsChildElements=jQuery('.costs-child');
                    addRecurringElement.on('click', function() {
                            if (recurringContainerElement.is(':visible')){
                                recurringContainerElement.hide(400);
                                addRecurringElement.html('Add Recurring');
                            }
                            else{
                                recurringContainerElement.show(400);
                                addRecurringElement.html('Click to Remove');
                            }
                        }
                    );
                    addUpsellElement.on('click', function() {

                        if (!upsellContainerElement.is(':visible')){
                            upsellContainerElement.show(400);
                            addUpsellElement.html('Click to Remove');
                        }
                        else{
                            upsellContainerElement.hide(400);
                            addUpsellElement.html('Add Upsell');
                        }
                        }
                    );
                    addUpsellRecurringElement.on('click', function() {

                        if (!upsellRecurringContainerElement.is(':visible')){
                            upsellRecurringContainerElement.show(400);
                            addUpsellRecurringElement.html('Click to Remove');
                        }
                        else{
                            upsellRecurringContainerElement.hide(400);
                            addUpsellRecurringElement.html('Add Upsell Recurring');
                        }
                        }
                    );
                    jQuery(document).on('click', '#showTotalIncome', function(e) {
                            if(jQuery(this).hasClass('opened')) {
                                jQuery('.income-child').css( {
                                        display: ''
                                    }
                                );
                                jQuery(this).removeClass('opened');
                                jQuery(this).find('.outcome__plus').text('+');
                            }
                            else {
                                jQuery('.income-child').css( {
                                        display: 'table-row'
                                    }
                                );
                                jQuery(this).addClass('opened');
                                jQuery(this).find('.outcome__plus').text('-');
                            }
                        }
                    );
                    jQuery(document).on('click', '#showTotalCosts', function(e) {
                            if(jQuery(this).hasClass('opened')) {
                                jQuery('.costs-child').css( {
                                        display: ''
                                    }
                                );
                                jQuery(this).removeClass('opened');
                                jQuery(this).find('.outcome__plus').text('+');
                            }
                            else {
                                jQuery('.costs-child').css( {
                                        display: 'table-row'
                                    }
                                );
                                jQuery(this).addClass('opened');
                                jQuery(this).find('.outcome__plus').text('-');
                            }
                        }
                    );
                    formElement.on('submit', function(e) {
                            e.preventDefault();
                            formElement.find("button").attr('disabled', true);
                            setTimeout(function() {
                                formElement.find("button").attr('disabled', false);
                            }, 1500);
                            messageElement.fadeOut();
                            loaderElement.css( {
                                    display: 'inline-block'
                                }
                            );
                            var data= {
                                    action: 'calculator', formData: formElement.serializeArray()
                                }
                            ;
                            fieldsetElement.attr('disabled', 'disabled');
                            jQuery.ajax( {
                                    type:formElement.attr('method'), url:'calc.php', data:data, success:function(response) {
                                        fieldsetElement.removeAttr('disabled');
                                        loaderElement.hide();
                                        response=JSON.parse(response);
                                        if(response.code===0) {
                                            var outcome=response.outcome;
                                            var output='';
                                            for(var i=0;
                                                i<outcome.length;
                                                i++) {
                                                console.log(outcome[i]);
                                                output+='<tr id="'+outcome[i].id+'" class="'+outcome[i].class+'">';
                                                output+='<td>'+outcome[i].name+'</td>';
                                                output+='<td class="calculator__count"><span class="before-value">'+outcome[i].beforeValue+'</span>'+outcome[i].value+'<span class="after-value">'+outcome[i].afterValue+'</span></td>';
                                                output+='</tr>';
                                            }
                                            outcomeElement.find('table').html(output);
                                            outcomeElement.fadeIn();
                                            jQuery('html, body').animate( {
                                                    scrollTop: outcomeElement.offset().top
                                                }
                                                , 500);
                                        }
                                        else {
                                            console.log(response);
                                            messageElement.text(response.errorMessage).fadeIn();
                                        }
                                    }
                                    , error:function(response) {
                                        console.log(response);
                                    }
                                }
                            );
                        }
                    );
                }
            )();
        }

    );
</script>
</body>
</html>