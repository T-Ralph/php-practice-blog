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
            <section id="search-blog-post" class="pre-loaded">
                <h2>Search</h2>
                <form>
                    <label for="search">Search</label><br>
                    <input type="text" name="search" id="search" placeholder="Search" required><br>
                    <input type="submit" value="Search">
                </form>
            </section>
            <section id="blog-post-1">
                <h2>.NET CORE</h2>
                <p>A C# framework developed by Microsoft for accelerated web and desktop application development.</p>
            </section>
        </article>
    </main>
<?php
    //Include Footer
    include_once dirname(__FILE__) . '/templates/footer.php';
?>