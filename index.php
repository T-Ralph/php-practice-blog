<?php
    //Set Up Class AutoLoading
    spl_autoload_register(function ($class) {
        include_once dirname(__FILE__) . '/includes/' . $class . '.Class.php';
    });

    //Include Head
    include_once dirname(__FILE__) . '/templates/head.php';

    //Initiate Blog Class
    $blog = new Blog();
?>
    <header>
        <nav>
            <h2>Blog Titles</h2>
            <ul>
                <li>
                    <a href="#search-blog-post">Search</a>
                </li>
                <?php $blog->RenderBlogTitles(); ?>
            </ul>
        </nav>
    </header>
    <main>
        <article>
            <h1>Blog Posts</h1>
            <section id="search-blog-post" class="pre-loaded">
                <h2>Search</h2>
                <form method="GET" action="">
                    <label for="search">Search</label><br>
                    <input type="text" name="search" id="search" placeholder="Search" required><br />
                    <input type="submit" value="Search">
                </form>
            </section>
            <?php $blog->RenderBlogPosts(); ?>
        </article>
    </main>
<?php
    //Include Footer
    include_once dirname(__FILE__) . '/templates/footer.php';
?>