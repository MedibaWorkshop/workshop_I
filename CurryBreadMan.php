<?php
/**
 * ファイルのコメントブロック
 *
 * PHP versions 5
 *
 * @category  Example
 * @package   Example
 * @author    Mr.Jam <mrjam@anpanman.jp>
 * @copyright 1997-2006 The PHP Group
 * @license   http://www.php.net/license/3_0.txt  PHP License 3.0
 * @link      http://homepage3.nifty.com/renoiv/php/phpcs/execute.html
 */

/**
 * カレーパンマン
 *
 * @category Bread
 * @package CurryBreadMan
 * @author Mr.Jam <mrjam@anpanman.jp>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link http://anpanman.jp/index.html
 */
class CurryBreadMan extends Hero {
    protected $name = 'カレーパンマン';
    protected $finish_echo = '2013/12/20 追加します。';

    /**
     * 紹介文
     *
     * @access public
     * @return string
     */
    public function getIntro() {
        $msg = <<<EOS

おいらカレーパンマン！
おかーさんは中華ぱんまん！
でも、おとーさんは太郎君です。
－－－－－－－－－－－－－－－－－－－
全部入れてやるぜぃ～～～～～～！！！
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
力もりもり
勇気三倍
許さないぞ、ばいきんまん！
顔がぬれて力が出ない…。
当たらなければどうという事はない。
戦いが終わったら、ぐっすり眠れるって保証はあるんですか！
今日は困っている人はいないみたいだ。
辛さ１０倍!!
騙されるほうが悪いんだー！！
出たな、お邪魔虫め！
見せて貰おうか。連邦軍のモビルスーツの性能とやらを！
しょくぱんまんさまー！
元気１００倍!!
パンダじゃないやい！
戦いは非情さ・・・。
坊やだからさ。
EOS;
        return $msg;
    }
}
?>
