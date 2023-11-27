<?php get_header(); ?>

<main>

    <section id="home" class="hero">
        <article class="hero__article">
            <h1>Welcome to our Hiking website.</h1>
            <p>Discover the best route and services for you.</p>
            <button>Get Action</button>
        </article>
    </section>

    <section id="about" class="about">
        <article class="about__aricle">
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio obcaecati natus modi, iste ab sed sint pariatur nesciunt soluta vitae quibusdam dolorum, quis aperiam, repellat cupiditate dolor voluptas tempora expedita!</p>
            <div class="about__div">
                <p>Name:</p>
                <span>Peter</span>
                <p>Family:</p>
                <span>Monev</span>
                <p>Phone:</p>
                <span>1234567890</span>
                <p>Address:</p>
                <span>Burgas</span>
            </div>
        </article>
        <article class="about__article__img">
            <div>
            </div>
            <div>
            </div>
        </article>
        <article>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum totam doloribus doloremque, quo illum enim ut iure cumque aspernatur quasi architecto magni sunt delectus cum et libero dicta odit ipsam.</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse veritatis aperiam nulla harum. Non totam aspernatur architecto autem culpa nobis, tenetur ipsa minima laudantium, labore hic. Iste optio minus deserunt.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo laboriosam quasi hic, necessitatibus natus eveniet, inventore animi quod, perspiciatis tenetur a. Quos ullam culpa labore nemo illum. Nam, impedit eveniet.</p>
        </article>
    </section>


    <section id="services" class="services">
        <h1 class="services__h1">Services</h1>
        <article class="services__article">
            <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1,
            );

            $services_query = new WP_Query($args);

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post(); ?>
                    <div class="service">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail(); ?>
                        <div class="service-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No services found.</p>
            <?php endif;
            ?>
        </article>
    </section>

    <section id="contact" class="contact">
        <h1 class="contact__h1">Contact Us</h1>
        <article class="article__contact">

            <div class="contact__div__left">
               <h2>Let's Chat.</h2>

               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium similique magnam et qui rem natus earum dolorem? Recusandae eos voluptatem et, voluptates at, deleniti iure cumque sunt nesciunt architecto impedit.</p>

               <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto maiores ullam laudantium provident debitis repudiandae ex voluptatibus, alias doloremque consequuntur necessitatibus nihil similique, deserunt totam magni reprehenderit maxime sapiente molestias.</p>
            </div>
            <div class="contact__form">
                <h2 class="contact__form__h2">Contact</h2>
                <form id="contact__form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="custom_contact_form">

                    <label for="name">Your Name</label>
                    <input type="text" name="name" required>

                    <label for="email">Your Email</label>
                    <input type="email" name="email" required>

                    <label for="message">Your Message</label>
                    <textarea name="message" rows="5" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>

        </article>
    </section>

</main>

<?php get_footer(); ?>