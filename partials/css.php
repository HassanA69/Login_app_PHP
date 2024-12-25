<style>
       /* Reset Styles */
       * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
       }

       /* Body Styling */
       body {
           font-family: "Arial", sans-serif;
           background: linear-gradient(135deg, #ff7e5f, #feb47b);
           /* تدرج ألوان دافئ وجميل */
           display: flex;
           justify-content: center;
           align-items: center;
           height: 100vh;
           margin: 0;
           color: #333;
           flex-direction: column;
       }

       /* Container for Links */
       .container {
           text-align: center;
           background-color: #ffffff;
           padding: 40px 50px;
           border-radius: 12px;
           box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
           width: 100%;
           max-width: 500px;
       }

       /* Heading Styling */
       h2 {
           font-size: 2rem;
           color: #4CAF50;
           /* لون نجاح */
           margin-bottom: 20px;
           font-weight: bold;
       }

       /* Links Styling */
       a {
           display: inline-block;
           margin-top: 15px;
           font-size: 1.1rem;
           text-decoration: none;
           color: #ff7e5f;
           font-weight: bold;
           transition: color 0.3s ease;
       }

       a:hover {
           color: #feb47b;
           /* تغيير اللون عند التحويم */
       }

       /* Responsive Design */
       @media (max-width: 768px) {
           .container {
               padding: 30px 40px;
           }

           h2 {
               font-size: 1.8rem;
           }
       }
   </style>