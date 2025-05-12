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
.home-card-list {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
}
.home-card {
  width: calc(20% - 16px);
  text-align: center;
  margin-bottom: 20px;
}
.home-card img {
  width: 100%;
  height: 240px;
  border-radius: 8px;
  object-fit: cover;
  object-position: center;
}
.home-news-list { display: flex; gap: 16px; flex-wrap: wrap; }
.home-news { width: 220px; }
.home-news img { width: 100%; border-radius: 8px; }
.home-news-title { font-size: 1em; margin: 8px 0 0 0; }
@media (max-width: 1000px) {
  .home-card {
    width: calc(25% - 16px);
  }
}
@media (max-width: 800px) {
  .home-card {
    width: calc(33.33% - 16px);
  }
}
@media (max-width: 600px) {
  .home-card {
    width: calc(50% - 16px);
  }
}
@media (max-width: 400px) {
  .home-card-list {
    flex-direction: column;
  }
  .home-card {
    width: 100%;
  }
}
.artist-list {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  justify-content: center;
}

.artist-card {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.08);
  width: 175px;
  padding: 24px 12px 16px 12px;
  text-align: center;
  position: relative;
  transition: box-shadow 0.2s;
}
.artist-card:hover {
  box-shadow: 0 8px 32px rgba(0,0,0,0.15);
}

.rank-badge {
  position: absolute;
  top: 12px;
  left: 12px;
  background: linear-gradient(90deg, #ffb347, #ffcc33);
  color: #fff;
  font-weight: bold;
  border-radius: 12px;
  padding: 4px 12px;
  font-size: 14px;
  z-index: 2;
}

.artist-avatar {
  width: 110px;
  height: 110px;
  object-fit: cover;
  border-radius: 50%;
  border: 4px solid #f3f3f3;
  margin-top: 20px;
  margin-bottom: 12px;
}

.artist-name {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}

.artist-rank-info {
  display: flex;
  justify-content: center;
  gap: 12px;
}

.artist-rank-info span {
  background: #f5f6fa;
  border-radius: 8px;
  padding: 6px 10px;
  font-size: 13px;
  color: #333;
  min-width: 60px;
  line-height: 1.2;
}

@media (max-width: 1000px) {
  .artist-card {
    width: 160px;
  }
}

@media (max-width: 850px) {
  .artist-card {
    width: 140px;
  }
  .artist-avatar {
    width: 100px;
    height: 100px;
  }
}

@media (max-width: 600px) {
  .artist-card {
    width: 100%;
    max-width: 320px;
    margin: 0 auto;
  }
  .artist-list {
    gap: 16px;
  }
}
</style>

<div class="container">

    <!-- Top10 Boy & Girl Groups -->
    <div class="home-section">
        <div class="home-title">Top10 C-DRAMA ACTORS INTERNATIONAL RANKING</div>
        <div class="artist-list">
            <?php
            $boy_groups = [
                ['Bai Jingting', '#', 'BaiJingting.jpg'],
                ['Xiao Zhan', '#', 'XiaoZhan.jpg'],
                ['Liu Yuning', '#', 'LiuYuning.jpg'],
                ['Ding Yuxi', '#', 'DingYuxi.jpg'],
                ['Wang Yibo', '#', 'WangYibo.jpg'],
                ['Fan Chengcheng', '#', 'FanChengcheng.jpg'],
                ['Tan Jianci', '#', 'TanJianci.jpg'],
                ['Chen Zheyuan', '#', 'ChenZheyuan.jpg'],
                ['Cheng Yi', '#', 'ChengYi.jpg'],
                ['Xu Kai', '#', 'XuKai.jpg'],
            ];
            for ($i = 0; $i < 10; $i++) {
                echo '<div class="artist-card top' . ($i + 1) . '">';
                echo '<div class="rank-badge">TOP ' . ($i + 1) . '</div>';
                echo '<img class="artist-avatar" src="' . get_stylesheet_directory_uri() . '/assets/' . $boy_groups[$i][2] . '" alt="' . $boy_groups[$i][0] . '">';
                echo '<div class="artist-name">' . $boy_groups[$i][0] . '</div>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="home-section">
        <div class="home-title">Top10 C-DRAMA ACTRESSES INTERNATIONAL RANKING</div>
        <div class="artist-list">
            <?php
            $girl_groups = [
                ['Zhao Lusi', '#', 'ZhaoLusi.jpg'],
                ['Zhao Liying', '#', 'ZhaoLiying.jpg'],
                ['Meng Ziyi', '#', 'MengZiyi.jpg'],
                ['Esther Yu', '#', 'EstherYu.jpg'],
                ['Dilraba Dilmurat', '#', 'DilrabaDilmurat.jpg'],
                ['Bai Lu', '#', 'BaiLu.jpg'],
                ['Qi Wei', '#', 'QiWei.jpg'],
                ['Zhang Ruonan', '#', 'ZhangRuonan.jpg'],
                ['Liu Shishi', '#', 'LiuShishi.jpg'],
                ['Shen Yue', '#', 'ShenYue.jpg'],
            ];
            for ($i = 0; $i < 10; $i++) {
                echo '<div class="artist-card top' . ($i + 1) . '">';
                echo '<div class="rank-badge">TOP ' . ($i + 1) . '</div>';
                echo '<img class="artist-avatar" src="' . get_stylesheet_directory_uri() . '/assets/' . $girl_groups[$i][2] . '" alt="' . $girl_groups[$i][0] . '">';
                echo '<div class="artist-name">' . $girl_groups[$i][0] . '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Chinese Dramas -->
    <div class="home-section">
        <div class="home-title">Top10 Chinese Dramas(2025)</div>
        <div class="home-card-list">
            <?php
            $dramas = [
                ['Hidden Love', '#', 'HiddenLove.png'],
                ['The First Frost', '#', 'TheFirstFrost.png'],
                ['When I Fly Towards You', '#', 'WhenIFlyTowardsYou.png'],
                ["Love in Pavilion", '#', 'LoveinPavilion.png'],
                ['Only for Love', '#', 'OnlyforLove.png'],
                ['The Journey of Legend', '#', 'TheJourneyofLegend.png'],
                ['The White Olive Tree', '#', 'TheWhiteOliveTree.png'],
                ['Guardians of the Dafeng', '#', 'GuardiansoftheDafeng.png'],
                ['Till The End Of The Moon', '#', 'MoonlightMystique.png'],
                ['Ski into Love', '#', 'SkiintoLove.png'],
            ];
            foreach ($dramas as $d) {
                $filename = pathinfo($d[2], PATHINFO_FILENAME);
                echo '<div class="home-card"><a href="' . $d[1] . '"><img src="' . get_stylesheet_directory_uri() . '/assets/' . $d[2] . '" alt="' . $filename . '"><div>' . $d[0] . '</div></a></div>';
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
                ["The Glory: Chen Duling's Stunning Transformation from Cold Beauty to Power Queen", '#', 'news3.jpg'],
                ['Si Jin: The Ultimate Aesthetic and Thrilling Reversal in a Historical Revenge Drama – Totally Worth It!', '#', 'news4.jpg'],
            ];
            foreach ($news as $n) {
                $filename = pathinfo($n[2], PATHINFO_FILENAME);
                echo '<div class="home-news"><a href="' . $n[1] . '"><img src="' . get_stylesheet_directory_uri() . '/assets/' . $n[2] . '" alt="' . $filename . '"><div class="home-news-title">' . $n[0] . '</div></a></div>';
            }
            ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
