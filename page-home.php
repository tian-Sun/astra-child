<?php
/*
Template Name: 简洁卡片式首页
*/
get_header();
?>

<style>
.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 40px 0;
}
.home-section { margin: 40px 0; }
.home-title { font-size: 2em; margin-bottom: 20px; }
.home-table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
.home-table th, .home-table td { padding: 8px 12px; text-align: left; }
.home-table th { border-bottom: 2px solid #eee; }
.home-table td { border-bottom: 1px solid #f5f5f5; }
.home-card-list { display: flex; gap: 16px; flex-wrap: wrap; }
.home-card { width: 120px; text-align: center; }
.home-card img { width: 100%; border-radius: 8px; }
.home-news-list { display: flex; gap: 16px; flex-wrap: wrap; }
.home-news { width: 220px; }
.home-news img { width: 100%; border-radius: 8px; }
.home-news-title { font-size: 1em; margin: 8px 0 0 0; }
@media (max-width: 800px) {
    .home-card-list, .home-news-list { flex-direction: column; }
    .home-card, .home-news { width: 100%; }
}
</style>

<div class="container">

    <!-- Top10 Boy & Girl Groups -->
    <div class="home-section">
        <div class="home-title">Top10 C-DRAMA ACTORS & ACTRESSES</div>
        <table class="home-table">
            <tr>
                <th>ACTORS</th>
                <th>ACTRESSES</th>
            </tr>
            <?php
            $boy_groups = [
                ['Bai Jingting', '#', 'BaiJingting.jpg'],
                ['Xiao Zhan', '#', 'xiaozhan.png'],
                ['Liu Yuning', '#', 'boystory_logo.png'],
                ['Wang Yibo', '#', 'wayv_logo.png'],
                ['Chen Zheyuan', '#', 'r1se_logo.png'],
<<<<<<< HEAD
                ['Cheng Y', '#', 'chengyi.jpg'],
=======
                ['Cheng Yi=', '#', 'chengyi.jpg'],
>>>>>>> 533b7d418306079301a6bf98cb1b36f7fa27bb4b
                ['Fan Chengcheng', '#', 'xnine_logo.png'],
                ['Lin Yi', '#', 'tffamily_logo.png'],
                ['Zhang Linghe', '#', 'sky_logo.png'],
                ['Wang Hedi', '#', 'sky_logo.png'],
            ];
            $girl_groups = [
                ['Zhao Lusi', '#', 'the9_logo.png'],
                ['Bai Lu', '#', 'bonbongirl_logo.png'],
                ['Meng Ziyi', '#', '7senses_logo.png'],
                ['Zhao Liying', '#', 'sing_logo.png'],
                ['Zhang Ruonan', '#', 'snh48_logo.png'],
                ['Esther Yu', '#', 'sevensense_logo.png'],
                ['Ju Jingyi', '#', '3unshine_logo.png'],
                ['Tiffany Yan', '#', 'chicchill_logo.png'],
                ['Shen Yue', '#', 'sis_logo.png'],
                ['Liu Shishi', '#', 'akb48_logo.png'],
            ];
            for ($i = 0; $i < 10; $i++) {
                echo '<tr>';
                echo '<td><img src="' . get_stylesheet_directory_uri() . '/assets/' . $boy_groups[$i][2] . '" width="24" style="vertical-align:middle;margin-right:8px;">';
                echo '<a href="' . $boy_groups[$i][1] . '">' . $boy_groups[$i][0] . '</a></td>';
                echo '<td><img src="' . get_stylesheet_directory_uri() . '/assets/' . $girl_groups[$i][2] . '" width="24" style="vertical-align:middle;margin-right:8px;">';
                echo '<a href="' . $girl_groups[$i][1] . '">' . $girl_groups[$i][0] . '</a></td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>

    <!-- Chinese Dramas -->
    <div class="home-section">
        <div class="home-title">Top10 Chinese Dramas</div>
        <div class="home-card-list">
            <?php
            $dramas = [
                ['The First Frost', '#', 'drama1.jpg'],
                ['Only for Love', '#', 'drama2.jpg'],
                ['When I Fly Towards You', '#', 'drama3.jpg'],
                ['Love in Pavilion', '#', 'drama4.jpg'],
                ['Hidden Love', '#', 'drama5.jpg'],
                ['Go to the Mountains and Sea', '#', 'drama6.jpg'],
                ["The Demon Hunter's Romance", '#', 'drama6.jpg'],
                ['Eat Run Love', '#', 'drama6.jpg'],
                ['Joy of Life Season 2', '#', 'drama6.jpg'],
                ['Kill My Sins', '#', 'drama6.jpg'],
            ];
            foreach ($dramas as $d) {
                echo '<div class="home-card"><a href="' . $d[1] . '"><img src="' . get_stylesheet_directory_uri() . '/assets/' . $d[2] . '" alt="' . $d[0] . '"><div>' . $d[0] . '</div></a></div>';
            }
            ?>
        </div>
    </div>

    <!-- News -->
    <div class="home-section">
        <div class="home-title">News</div>
        <div class="home-news-list">
            <?php
            $news = [
                ['Arthur Chen and Zhuang Dafei Star in a Heartwarming Romance About Second Chances in Eat Run Love', '#', 'news1.jpg'],
                ['Tiffany Tang and Liu Xueyi Deliver Unexpected Chemistry and High Drama in A Moment But Forever', '#', 'news2.jpg'],
                ['The Glory: Chen Duling’s Stunning Transformation from “Cold Beauty” to “Power Queen”', '#', 'news3.jpg'],
                ['Si Jin: The Ultimate Aesthetic and Thrilling Reversal in a Historical Revenge Drama – Totally Worth It!', '#', 'news4.jpg'],
            ];
            foreach ($news as $n) {
                echo '<div class="home-news"><a href="' . $n[1] . '"><img src="' . get_stylesheet_directory_uri() . '/assets/' . $n[2] . '" alt="' . $n[0] . '"><div class="home-news-title">' . $n[0] . '</div></a></div>';
            }
            ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
