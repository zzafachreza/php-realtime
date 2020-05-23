

<?php



$pesan = $_POST['pesan'];
$user = $_POST['user'];
/**
 * This file is part of the Elephant.io package
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @copyright Wisembly
 * @license   http://www.opensource.org/licenses/MIT-License MIT License
 */

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

require 'vendor/autoload.php';

$client = new Client(new Version2X('http://1.1.26.116:3001'));

$client->initialize();
$client->emit('abu_hanif', ['user' => $user,'pesan' => $pesan,'waktu'=>date('Y-m-d H:i:s')]);
$client->close();


?>
