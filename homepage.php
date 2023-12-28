<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel='stylesheet' href='CSS/homepage.css'>
    <link rel='stylesheet' href='CSS/banner.css'>
    <link rel='stylesheet' href='CSS/brands.css'>
    <link rel='stylesheet' href='CSS/instruments.css'>
    <link rel='stylesheet' href='CSS/introduce.css'>
    <link rel='stylesheet' href='CSS/instrument-table.css'> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="script.js"></script>
    <script src="fetch.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>
<?php 
include 'uppernav.php';
include 'lowernav.php';
?>
<body>
    <section class="banner">
        <!-- Flying Object -->
        <img id="santa" src="assets/santa.png" />

        <div id="scene">
            <!-- Background -->
            <div class="background" data-depth="0.2">
                <img id="background-left" src="assets/christmas_bg.webp" />
            </div>
            <!-- Mountains/Hills -->
            <div class="snow back" data-depth="0.6">
                <img src="assets/mountain.png" />
            </div>
            <div class="snow front" data-depth="0.6">
                <img id="snow-reverse" src="assets/mountain.png" />
            </div>
        </div>
        <div class="banner-text">
            <button>Celebrate With Us</button>
            <h1 style="color: #ffffff;"><span style="color: #52ffdf">Merry</span> Christmas</h1>
            <h2 style="color: #ffffff;">Let the <span style="color: #52ffdf">sparkle</span> of the</h2>
            <h2>holidays light up your days.</h2>
            <hr style="border: 1px solid #ffffff; margin: 20px 0;">
            <p style="color: #ffffff;">CHECK OUR PROMOTIONS</p>
        </div>
        <script>
            var scene = document.getElementById('scene');
            var parallax = new Parallax(scene);
        </script>
    </section>
    <section class="brands-section">
        <div class="brands">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                $imagePath = "assets/brands/brands ($i).png";
                echo "<div class='brand' style='display: inline-block; '><img src='$imagePath' alt='Brand $i'></div>";
            }
            ?>
        </div>
    </section>
    <section class="instruments">
        <h2 style="color: #ff1a50;">Access to the most</h2>
        <h1 style="color: #000000; text-transform: uppercase;">Popular Instruments</h1>
        <div class="icon-list">
            <div class="column">
                <div class="list-item">
                    <img src="assets/icon/forex.png" alt="Forex Icon">
                    <h3>Forex</h3>
                    <p>Trade over 100 currency pairs, including the majors, minors and exotics, with ultra-low spreads and fast execution.</p>
                </div>
                <div class="list-item">
                    <img src="assets/icon/gold.png" alt="Precious Metals Icon">
                    <h3>Precious Metals</h3>
                    <p>Speculate on the price movements of Gold and Silver against the US Dollar and diversify your trading portfolio.</p>
                </div>
                <div class="list-item">
                    <img src="assets/icon/stock.png" alt="Stocks Icon">
                    <h3>Stocks</h3>
                    <p>Get access to major international stocks (Apple, Google, Tesla) with no commissions or requotes and no hidden mark-ups.</p>
                </div>
                <div class="list-item">
                    <img src="assets/icon/energy.png" alt="Energies Icon">
                    <h3>Energies</h3>
                    <p>Trade CFDs on spot energies such as Brent oil and natural gas with no commissions or requotes and no hidden mark-ups.</p>
                </div>
            </div>
            <div class="column">
                <div class="list-item">
                    <img src="assets/icon/indices.png" alt="Stock Indices Icon">
                    <h3>Stock Indices</h3>
                    <p>Get access to major international stock indices (S&amp;P 500, Nasdaq 100) with no commissions or requotes and no hidden mark-ups.</p>
                </div>
                <div class="list-item">
                    <img src="assets/icon/crypto.png" alt="Cryptocurrencies Icon">
                    <h3>Cryptocurrencies</h3>
                    <p>Trade the new era of currencies such as Bitcoin, Etherium and Litecoin with ultra-low spreads and fast execution.</p>
                </div>
                <div class="list-item">
                    <img src="assets/icon/wheat.png" alt="Commodities Icon">
                    <h3>Commodities</h3>
                    <p>Trade over a vast variety of commodities (Cotton, Cocoa, Wheat) with ultra-low spreads and fast execution.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="introduce">
        <div class="block">
            <h2 class="block-title">Brand Introduce</h2>
            <h2 class="block-title2">100% Stocks & 0% Commission</h2>
            <p class="block-description">Get exactly what you're paying for the commission-free stock investing</p>
            <a href="#" class="block-button" style="background-color: #ff1a50;">Explore</a>
        </div>
        <div class="bear-image">
            <img src="assets/bear.png" alt="Bear">
        </div>
        <div class="bull-image">
            <img src="assets/bull.png" alt="Bull">
        </div>
        <div class="block">
            <h2 class="block-title3">The Perfect Environment For Expert Advisors (EA)</h2>
            <p class="block-description2">We've built the perfect environment for EAs to thrive - we allow scalping, hedging, news trading and more. No requotes and no minimum stop loss distance.</p>
        </div>
        <div class="block">
            <h2 class="block-title3">Instant Deposits. Fast Withdrawals.</h2>
            <p class="block-description2">Fund your account easily and securely through our wide range of payment options. Your funds are held securely in Tier 1 banks.</p>
        </div>
    </section>
    <section class="instrument-table">
        <header>
            <h1>Instrument Table</h1>
        </header>
        <div id="container1">
            <p>Make your move. Trade over 5600 global markets. We offer two levels of pricing depending on your account tier.</p>
            <p>Search bar for searching the table.</p>
            <ul>
                <li>$100 Minimum Deposit</li>
                <li>100% Security of Funds</li>
                <li>1:500 Max Leverage</li>
                <li>10+ Funding Options</li>
                <li>10000+ Trading Instruments</li>
                <li>&lt;20ms execution speed</li>
            </ul>
        </div>

        <div id="container2">
            <table id="instrumentTable" class="display">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>BUY</th>
                        <th>SELL</th>
                        <th>SPREAD</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table content will be inserted here -->
                </tbody>
            </table>
        </div>
    </section>
    <script>
        // Function to fetch data from the API
        function fetchData() {
            fetch('http://13.212.255.177/api/priceData/technical-test')
                .then(response => response.json())
                .then(data => {
                    // Update the DataTable with the new data
                    var table = $('#instrumentTable').DataTable();
                    table.clear();
                    table.rows.add(data);
                    table.draw();
                })
                .catch(error => console.error('Error fetching data:', error));
        }

        // DataTable initialization
        $(document).ready(function() {
            $('#instrumentTable').DataTable({
                paging: true,
                searching: true,
                columns: [
                    { data: 'Symbol', title: 'NAME'}, // Set visible to true
                    { data: 'Bid', title: 'BUY' },
                    { data: 'Ask', title: 'SELL' },
                    { data: 'Spread', title: 'SPREAD' }
                ]
            });

            // Reload data every 1 second
            setInterval(fetchData, 1000);

            // Initial fetch
            fetchData();
        });
    </script>
</body>
</html>