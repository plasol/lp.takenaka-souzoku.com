<?php

/**

 * WordPress の基本設定

 *

 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。

 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして

 * 直接編集して値を入力してもかまいません。

 *

 * このファイルは、以下の設定を含みます。

 *

 * * MySQL 設定

 * * 秘密鍵

 * * データベーステーブル接頭辞

 * * ABSPATH

 *

 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86

 *

 * @package WordPress

 */



// 注意:

// Windows の "メモ帳" でこのファイルを編集しないでください !

// 問題なく使えるテキストエディタ

// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)

// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。



// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //

/** WordPress のためのデータベース名 */

define('DB_NAME', 'vps10081_lpsouzoku');



/** MySQL データベースのユーザー名 */

define('DB_USER', 'vps10081_lpsouzo');



/** MySQL データベースのパスワード */

define('DB_PASSWORD', 'z+VVg6(^.V0w');



/** MySQL のホスト名 */

define('DB_HOST', 'localhost');



/** データベースのテーブルを作成する際のデータベースの文字セット */

define('DB_CHARSET', 'utf8mb4');



/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */

define('DB_COLLATE', '');



/**#@+

 * 認証用ユニークキー

 *

 * それぞれを異なるユニーク (一意) な文字列に変更してください。

 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。

 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。

 *

 * @since 2.6.0

 */

define('AUTH_KEY',         '66[>YYt9A&RbSZa:@x6]G>F&xt4rqpjaPvps+NPsk([60]*y.85c9j,Eym5[-9.?');

define('SECURE_AUTH_KEY',  's`pRF<]lujY=;]^*[C:3mzQ2]o?73!p^YsOItY)As<Fcf!z#v?}eXb%ofO<RVvSH');

define('LOGGED_IN_KEY',    '7eUv6Kfi]`Q`D/oR:!3&Q&9+W8S6iXj(h&Jd<*kUXOe>z>/IGh c[)oZn_mUr0c7');

define('NONCE_KEY',        'D;*{J-y~:Cdw$AIGeB5vo.!07o_:*O4[CL`R^G5L5wC(7{tcw>g-.y{~k Nq_.q@');

define('AUTH_SALT',        'd(g8-1S9@5s!|r@pxTbT]^8~(1*B!K1]4!Uh.xU+Ld`9iNI0g5^DNo1T&U9u[}np');

define('SECURE_AUTH_SALT', 'y[Kt)qy_t<N<dC4~8eD;]~Sl$hG{%Wl$ly:sQlmj}x-&ni<@ly/Pq-]bQc3.HM2s');

define('LOGGED_IN_SALT',   '5):MSFiggEm*SX7bBGebPCY9i77NnM75jexACeZn7SV0@!<v:S=4Md{AM^]n%<#5');

define('NONCE_SALT',       'hs@=q8FVeUWO]NBf-9R0.R*We.-{f=$|hoQ=`PjGAQd5t[A:*!4h;xIZZ4<g2$91');



/**#@-*/



/**

 * WordPress データベーステーブルの接頭辞

 *

 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を

 * インストールすることができます。半角英数字と下線のみを使用してください。

 */

$table_prefix  = 'wp_';



/**

 * 開発者へ: WordPress デバッグモード

 *

 * この値を true にすると、開発中に注意 (notice) を表示します。

 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。

 *

 * その他のデバッグに利用できる定数については Codex をご覧ください。

 *

 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0

 */

define('WP_DEBUG', false);



/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

