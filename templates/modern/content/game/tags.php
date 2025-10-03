<div id="Pages" class="bgs">
<title>Contact Us - Game Portal</title>
    <style>
        /* * CATATAN: CSS telah diubah agar lebih spesifik untuk menghindari konflik.
         * Semua style sekarang berada di dalam ID '#game-portal-contact-wrapper'.
         * Style untuk 'body' telah dihapus. Harap terapkan background di file CSS utama Anda.
        */

        #game-portal-contact-wrapper {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* CSS untuk styling container "Hubungi Kami" */
        #game-portal-contact-wrapper .contact-container {
            /* Background diubah menjadi transparan */
            background-color: transparent;
            color: #f1f1f1;
            max-width: 700px;
            width: 100%;
            margin: 40px auto;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.4);
            line-height: 1.7;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            text-align: center;
        }

        #game-portal-contact-wrapper .contact-container h2 {
            font-size: 2.2rem;
            color: #ffffff;
            margin-bottom: 20px;
            font-weight: 600;
        }

        #game-portal-contact-wrapper .contact-container p {
            color: #cccccc;
            font-size: 1.05rem;
        }

        #game-portal-contact-wrapper .email-contact {
            text-align: center;
            margin: 30px 0;
            padding: 15px;
            background-color: rgba(88, 166, 255, 0.1);
            border-radius: 8px;
            border: 1px solid rgba(88, 166, 255, 0.2);
            font-size: 1.1rem;
        }

        #game-portal-contact-wrapper .email-contact a {
            color: #58a6ff;
            text-decoration: none;
            font-weight: bold;
        }

        #game-portal-contact-wrapper .email-contact a:hover {
            text-decoration: underline;
        }

        #game-portal-contact-wrapper .disclaimer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        #game-portal-contact-wrapper .disclaimer h3 {
            color: #ffc107; /* Warna kuning untuk penekanan */
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        #game-portal-contact-wrapper .disclaimer p {
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Responsive design untuk layar kecil */
        @media (max-width: 768px) {
            #game-portal-contact-wrapper {
                padding: 10px;
            }
            #game-portal-contact-wrapper .contact-container {
                padding: 25px;
            }
            #game-portal-contact-wrapper .contact-container h2 {
                font-size: 1.8rem;
            }
        }
    </style>
<div id="game-portal-contact-wrapper">
        <section class="contact-container">
            <h2>Contact Us 🎮</h2>
            <p>
                If you’d like to reach out—whether it’s to ask a question, share your ideas, or simply get in touch—we’d be more than happy to hear from you! We'll do our best to respond as quickly as possible.
            </p>

            <div class="email-contact">
                Drop us an email at: <a href="mailto:support@gameportal.com">support@{{CONFIG_SITE_NAME}}</a>
            </div>

            <div class="disclaimer">
                <h3>An Important Note</h3>
                <p>
                    Please keep in mind that our platform serves as a hub or portal where you can discover and enjoy a wide variety of games. We don’t actually create or develop the games ourselves. So, if you run into technical issues, gameplay bugs, or need direct support for a specific title, it’s best to contact the game’s official developers or publishers. They’ll be able to provide you with the most accurate help.
                </p>
            </div>
        </section>
    </div>


</div>