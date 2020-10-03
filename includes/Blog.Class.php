<?php
    //Define Class
    Class Blog {
        //Define Property
        public $search;

        //Define constructor
        public function __construct($search = "") {
            //Assign Property
            $this->search = $search;

            //Get Articles from JSON File
            $this->json_file = 'json/articles.json';
            $this->json_article = file_get_contents($this->json_file);
            $this->json_data = json_decode($this->json_article);

            //Check for Search Filter
            if (!empty($search)) {
                $this->SearchFilterBlogPosts();
            }
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

        public function SearchFilterBlogPosts() {
            //Create Temp Array
            $filter_array = array();
            $filter_array["articles"] = array();

            //Loop Through Articles
            $id = 1;
            foreach ($this->json_data->articles as $json_data) :
                if (stristr($json_data->title, $this->search) || stristr($json_data->content, $this->search)) :
                    $filter_array["articles"][$id]["id"] = $id;
                    $filter_array["articles"][$id]["title"] = $json_data->title;
                    $filter_array["articles"][$id]["content"] = $json_data->content;
                    $id++;
                endif;
            endforeach;

            //Convert Array to Object and Assign to $this->json_data
            $this->json_data = json_decode(json_encode($filter_array));;
        }
    }
?>