<?php
/**
 * @package pigeon
 * @copyright Keboola
 * @author Jakub Matejka <jakub@keboola.com>
 */

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/common.php';

use Symfony\Component\Console\Application;
use Keboola\Pigeon\RunCommand;
use Symfony\Component\Console\Output\ConsoleOutput;

$application = new Application;
$application->add(new RunCommand);
$application->run(null, new ConsoleOutput());
