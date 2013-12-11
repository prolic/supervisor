Indigo Supervisor
=================

PHP library for managing supervisord through XML-RPC

Usage
-----

```php
use Indigo\Supervisor\Supervisor;
use Indigo\Supervisor\Process;

$connector = new Indigo\Supervisor\Connector\InetConnector('localhost', 9001);
//$connector = new Indigo\Supervisor\Connector\SocketConnector('unix:///var/run/supervisor.lock');

$connector->setCredentials('user', '123');

$supervisor = new Indigo\Supervisor\Supervisor($connector);

// returns Process object
$process->$supervisor->getProcess('test_process');

// returns array of process info
$supervisor->getProcessInfo('test_process');

// same as $supervisor->stopProcess($process);
// same as $supervisor->stopProcess('test_process');
$process->stop();

// Don't wait for process start, return immediately
$process->start('false');

// returns true if running
// same as $process->isState(Process::RUNNING);
$process->isRunning();

// returns process name
echo $process;

// returns process information
$process->getPayload();
```

Further info
------------
You can find the XML-RPC documentation here:
[http://supervisord.org/api.html](http://supervisord.org/api.html)


TODO
----

* Implement multicall, the current serialization does NOT support it