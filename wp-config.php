<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'choppbeer' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'choppbeer' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Daniel09' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql873.umbler.com' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`$zSBq,?oZzaRH6|K@;>+3@_% t:xQJ:/4FUNPLP%4wZ]pR-?0WVLOWBO+DM/[Wv' );
define( 'SECURE_AUTH_KEY',  '69-%!!m29_B3VZ_AbJ#SA4s^5n?@x:hQC`xMjD04<BJuC Yeg$94iQ{!ca>%!>5?' );
define( 'LOGGED_IN_KEY',    'EA~^2@+9]5FapV+K#C$6zmBgSMqP+_<7k-& W7[a.S]k4c.tYgr$z+qc+#eq*{/I' );
define( 'NONCE_KEY',        'v,!#cRrcWF :c 4vN|gd~_&`w=]bR/_DyoGpmqT)lww6Nst)r|de-c>^y@/y9YBS' );
define( 'AUTH_SALT',        'tm*2xe&I8w&i>;-=OYS@IZ7[{nm[kR@T.Bic;zSH~q<S`txs,Kn2W(vTy#Uky%wd' );
define( 'SECURE_AUTH_SALT', 'o_;:q9~u*._~/p(fgCmVj,}LA>]=G_9%[?]a1z/X(eQ:c7MY#Rc}C8_hQfJn&aA-' );
define( 'LOGGED_IN_SALT',   '69#J`w^OGTY?DxJ#]{wX]XyRA{Q*Jcb6y[r>Oyu6jmq-kPv#jboi?]@F<H`gr+;U' );
define( 'NONCE_SALT',       'JIF~> /^(pPKc#MD`9I ;<%3$YKkC8iGc`$&A`[:/83WpHDOb+zyeKv,[!dOrZrO' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
