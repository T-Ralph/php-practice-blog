<?php
    //Include Head
    include_once dirname(__FILE__) . '/templates/head.php';
?>
    <?php
        //Include Blog Titles
        include_once dirname(__FILE__) . '/templates/blog_titles.php';
    ?>
    <main>
        <article>
            <h1>Blog Posts</h1>
            <section id="add-blog-post" class="pre-loaded">
                <h2>Search</h2>
                <form>
                    <label for="search">Search</label><br>
                    <input type="text" name="search" id="search" placeholder="Search" required><br>
                    <input type="submit" value="Search">
                </form>
            </section>
        </article>
    </main>
<?php
    //Include Footer
    include_once dirname(__FILE__) . '/templates/footer.php';
?>