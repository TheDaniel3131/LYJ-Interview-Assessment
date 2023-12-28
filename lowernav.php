<style>
    .navbar {
        background-color: white;
        display: flex;
        justify-content: center; /* Center the navlinks */
        padding: 15px 0px 15px 0px;
    }

    .navlink {
        margin-right: 2em;
        text-decoration: none;
        color: black;
        font-family: "Arial", "Sans-Serif";
        font-weight: semi-bold;
        letter-spacing: -0.5px;
        font-size: 20px; /* Increase the font size */
        line-height: 1.5; /* Add more spacing */
    }

    /* Media query for smaller screen sizes */
    @media (max-width: 768px) {
        .navbar {
            flex-wrap: wrap; /* Allow the navlinks to wrap to the next line */
            justify-content: center; /* Center the navlinks */
            text-align: center;
            align-items: center;
        }

        .navlink {
            margin-right: 1em; /* Reduce the margin between navlinks */
            margin-bottom: 0.5em; /* Add some spacing between navlinks */
            text-align: center;
            align-items: center;
        }
    }
</style>

<nav class="navbar">
    <a href="#" class="navlink">Trading</a>
    <a href="#" class="navlink">Platforms</a>
    <a href="#" class="navlink">Client Tools</a>
    <a href="#" class="navlink">Promotions</a>
    <a href="#" class="navlink">Research</a>
    <a href="#" class="navlink">Partnerships</a>
    <a href="#" class="navlink">About Us</a>
</nav>
