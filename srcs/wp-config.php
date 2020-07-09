<?php
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
define('DB_NAME', 'wordpress_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'admin');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V} *0l43L4[838(n1I2)?v/F21/-3k(^:Dk&C(WbFa`|+}xPqxB|&t|scyumcJ$>');
define('SECURE_AUTH_KEY',  'J+hqS/q6nmBb}/|8fYHGuy8$=%J(jP;$e31)qR?#Oid-/[XiRYCcUGqgNi90Enbo');
define('LOGGED_IN_KEY',    'rvj3X=(J&VyHN*E$-d+UmFXJo#S;:(~(x*.DvyoZUF3-Yj1:u5fDZA64nO(%?ZmP');
define('NONCE_KEY',        ';Rj<9qh7Yp/Ql|N-S=Laf(!2fjc~V1u!I;dtf0dSJ,01.pW}KWYF}O<7&gmc&Jae');
define('AUTH_SALT',        '_9Y{q0EwQo8Dg(,y7u)Qd2P8BCv{C|o?ssjbgtmRks+2G17>s:`-x4>sX?UINM#6');
define('SECURE_AUTH_SALT', 'VOGM-$kLRx~ZofaLN16|kB+|Jk?FV8uN}z/W([}fXWih9fMcmBegX6r#OH2$`/ F');
define('LOGGED_IN_SALT',   '7N7:A@0i$mYj%msyM;/<Wa%[)|k<0,/f=4nrU0[&lKqa1>UM$z0l6?x>C=|6>Kxx');
define('NONCE_SALT',       '}5fS~2K,jAN-+Hl|EQt[j>EDJgCNK+Fub>nNaA-#(?q8AxJA@_L3`?e&26=Pdz0t');

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
