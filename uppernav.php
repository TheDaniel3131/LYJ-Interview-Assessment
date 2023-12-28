<div style="
background-color: white; padding: 35px; 
display: flex; justify-content: space-between; align-items: center; 
font-family: 'Arial', sans-serif;
">
    <div>
        <span style="text-transform: uppercase; font-size: 2.5em; font-weight: bold; margin-left: 4em;">Logo</span>
    </div>
    <div style="margin-right: 4em;">
        <button style="margin-left: 0; margin-right: 15px; padding: 10px 50px; font-size: 16px; border-radius: 8px; border-color: #D2D2D2; background-color: white; font-weight: bold; outline: none;">Demo</button>
        <button style="margin-left: 0; margin-right: 15px; padding: 10px 50px; font-size: 16px; border-radius: 8px; border-color: #D2D2D2; background-color: white; font-weight: bold; outline: none;">Login</button>
        <button style="margin-left: 0; margin-right: 15px; padding: 10px 50px; font-size: 16px; border-radius: 8px; border-color: #D2D2D2; background-color: #FF1A50; color: white; font-weight: bold; outline: none;">Sign Up</button>
    </div>
</div>
<hr style="color: #3f3f3f;">
<style>
    @media (max-width: 768px) {
        /* Adjust styles for smaller screen sizes */
        div[style*="background-color: white; padding: 35px; text-align: center;"] {
            flex-direction: column;
            padding: 20px;
        }

        div[style*="margin-right: 4em;"] {
            margin-right: 2em;
        }

        button {
            margin: 5px;
            padding: 5px 20px;
            font-size: 14px;
        }

        /* Add spacing between logo and buttons */
        div[style*="justify-content: space-between;"] {
            flex-wrap: wrap;
        }

        div[style*="margin-left: 4em;"] {
            margin-bottom: 1em;
        }
    }
</style>
