<?php
    //Define Class
    Class Blog {
        //Define Property
        public $search;

        //Define constructor
        public function __construct($search = "") {
            //Get Articles from JSON File
            $this->json_file = 'json/articles.json';
            $this->json_article = file_get_contents($this->json_file);
            $this->json_data = json_decode($this->json_article);

            //Check for Search Filter
        }

        public function RenderBlogTitles() {
            //Loop Through Articles
            foreach ($this->json_data->articles as $json_data) :
            ?>
                <li>
                    <a href="#blog-post-<?php echo $json_data->id; ?>">
                        <?php echo $json_data->title; ?>
                    </a>
                </li>
            <?php
            endforeach;
        }

        public function RenderBlogPosts() {
            //Loop Through Articles
            foreach ($this->json_data->articles as $json_data) :
            ?>
                <section id="blog-post-<?php echo $json_data->id; ?>">
                    <h2><?php echo $json_data->title; ?></h2>
                    <p><?php echo $json_data->content; ?></p>
                </section>
            <?php
            endforeach;
        }
    }
?>