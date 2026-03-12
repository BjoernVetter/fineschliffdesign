<?php get_header(); ?>

<section class="hero">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-image.webp" 
        alt="Feinschliff Design"
        
    >

    <div class="hero-content">
        <h1>Fineschliff Design</h1>
        <p>Videografie, Webdesign und Grafikdesign treffen hier aufeinander</p>
    </div>
</section>


<section class="intro">

    <div class="section-inner">

        <h2 class="intro-title">
            Design mit Blick fürs Detail
        </h2>

        <div class="intro-text">

            <p>
                Fineschliff Design steht für kreative Gestaltung mit Persönlichkeit.
                Ich entwickle individuelle visuelle Konzepte für Marken, Unternehmen
                und Projekte – von Logos und Flyern über Social Media Inhalte bis
                hin zu modernen Webseiten.
            </p>

            <p>
                Dabei geht es nicht nur um ein schönes Erscheinungsbild, sondern um
                einen stimmigen Auftritt, der professionell wirkt und im Kopf bleibt.
            </p>

            <p>
                Von der ersten Idee bis zur finalen Umsetzung entsteht jedes Projekt
                mit einem hohen Anspruch an Ästhetik, Klarheit und Wiedererkennung.
            </p>

        </div>

    </div>

</section>



<section class="about" id="about">

    <div class="section-inner about-inner">

        <div class="about-image">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/img/about.webp"
                alt="Björn – Fineschliff Design"
                loading="lazy"
            >
        </div>

        <div class="about-content">
            <h2>Über mich</h2>

            <p>
                Ich bin Björn und hinter Fineschliff Design steckt meine Leidenschaft
                für Videografie, Webdesign und Grafikdesign.
            </p>

            <p>
                Mein Fokus liegt auf modernen, klaren Designs und hochwertigen
                visuellen Inhalten, die Marken und Projekte professionell präsentieren.
            </p>

        </div>

    </div>

</section>

<section class="portfolio" id="portfolio">
    <div class="section-inner">

        <div class="portfolio-heading">
            <h2>Portfolio</h2>
            <p>
                Eine Auswahl an Projekten aus den Bereichen Webdesign,
                Videografie und Grafikdesign.
            </p>
        </div>

        <div class="portfolio-wrapper">

            <article class="portfolio-item">
                <div class="portfolio-image">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/projekt-1.webp" 
                        alt="Projekt 1"
                    >
                </div>

                <div class="portfolio-content">
                    <h3>Projekt 1</h3>
                    <p>Kurze Beschreibung des Projekts.</p>
                </div>
            </article>

            <article class="portfolio-item">
                <div class="portfolio-image">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/projekt-2.webp" 
                        alt="Projekt 2"
                    >
                </div>

                <div class="portfolio-content">
                    <h3>Projekt 2</h3>
                    <p>Kurze Beschreibung des Projekts.</p>
                </div>
            </article>

            <article class="portfolio-item">
                <div class="portfolio-image">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/projekt-3.webp" 
                        alt="Projekt 3"
                    >
                </div>

                <div class="portfolio-content">
                    <h3>Projekt 3</h3>
                    <p>Kurze Beschreibung des Projekts.</p>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="contact" id="contact">
    <div class="section-inner contact-inner">

        <div class="contact-heading">
            <h2>Kontakt</h2>
            <p>
                Du möchtest mit mir zusammenarbeiten oder hast eine Idee für ein Projekt?
                Dann melde dich gerne bei mir.
            </p>
        </div>

        <div class="contact-box">
            <p><strong>E-Mail:</strong>meineEmailadresse</p>
            <p><strong>Instagram:</strong> @deinprofil</p>
            <a href="mailto:info@fineschliffdesign.de" class="contact-button">Jetzt Kontakt aufnehmen</a>
        </div>

    </div>
</section>

<?php get_footer(); ?>