<?php

/*
 * This file is part of the Indigo Supervisor package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Supervisor\Connector;

/**
 * Dummy XMLRPC Connector class
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class DummyXmlrpcConnector extends AbstractXmlrpcConnector
{
    /**
     * {@inheritdoc}
     */
    public function call($namespace, $method, array $arguments = array()) {}
}
