<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-list">
                    <h5 class="white-text">BOOKINGS</h5>
                    <p>502 New Design Str, Melbourne, <br> San Francisco, CA 94110, United States Of America<br>
                        Australia T:1123-456-789<br>
                        Email: demo@example.com</p>
                </div>
                <div class="social-icons">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col">
                <div class="footer-list">
                    <h5 class="white-text">INFORMATION</h5>
                    <ul>
                        <li><a href="#">Product Support</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Report Abuse</a></li>
                        <li><a href="#">Redeem Voucher</a></li>
                        <li><a href="#">Order Status</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="footer-list">
                    <h5 class="white-text">SUPPORT</h5>
                    <ul>
                        <li><a href="#">Policies & Rules</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">License Policy</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Locality</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="footer-newsletter">
                    <h2 class="white-text">NEWSLETTER</h2>
                    <input type="text" placeholder="Email">
                    <textarea placeholder="Enter your text"></textarea>
                    <button class="orange-button">SEND MESSAGE</button>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>


    <p class="copyright">
        <span>&#169; 2023 All Rights Reserved. Developed By TemplateMela</span>
    </p>
</footer>

<style lang="scss">
    .container {
        display: flex;
        flex-direction: column;
        padding: 10px;
    }

    main {
        flex-grow: 1;
    }

    .footer {
        color: white;
        background-color: black;

    }



    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .col {
        margin: 0 20px;
        flex: 1;
        min-width: 0;
        margin-bottom: 20px;
    }

    .footer-list h5 {
        color: white;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .footer-list p {
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-list ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-list ul li {
        margin-bottom: 10px;
    }

    .footer-list ul li a {
        font-size: smaller;
        color: white;
        text-decoration: none;
    }

    .footer-list ul li a:hover {
        color: #f2870c;
    }

    .footer-newsletter input,
    .footer-newsletter textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid lightgrey;
        border-radius: 4px;
        background-color: #1c1c1c;
        color: white;
    }

    .footer-newsletter textarea {
        height: 70px;
    }

    .orange-button {
        width: 200px;
        font-size: 16px;
        background-color: transparent;
        border: 2px solid #f2870c;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .orange-button:hover {
        background-color: #f2870c;
        color: white;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: start;
    }

    .social-icons i {
        font-size: 15px;
        color: white;
        margin: 0 5px;
    }

    .line {
        width: 100%;
        height: 1px;
        background-color: lightgray;
        margin-top: 20px;
        margin-bottom: 30px;
    }

    .copyright {
        padding-bottom: 30px;
        color: lightgray;
        font-size: 14px;
        text-align: center;
    }

    .copyright span {
        display: inline-block;
    }
</style>
