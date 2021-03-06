<?php

/*
 * This file is part of the Indigo Supervisor package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\Supervisor\Event;

/**
 * Default Event class
 *
 * @author Márk Sági-Kazár <mark.sagikazar@gmail.com>
 */
class Event implements EventInterface
{
    /**
     * Header values
     *
     * @var array
     */
    protected $header = array();

    /**
     * Payload values
     *
     * @var array
     */
    protected $payload = array();

    /**
     * Body
     *
     * @var string
     */
    protected $body = null;

    /**
     * Creates a new Event
     *
     * @param array  $header
     * @param array  $payload
     * @param string $body
     */
    public function __construct(array $header, array $payload, $body = null)
    {
        $this->setHeader($header);
        $this->setPayload($payload);
        $this->setBody($body);
    }

    /**
     * {@inheritdocs}
     */
    public function getHeader($key = null, $default = null)
    {
        return $this->arrGet($this->header, $key, $default);
    }

    /**
     * {@inheritdocs}
     */
    public function setHeader(array $header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * {@inheritdocs}
     */
    public function getPayload($key = null, $default = null)
    {
        return $this->arrGet($this->payload, $key, $default);
    }

    /**
     * {@inheritdocs}
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * {@inheritdocs}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdocs}
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get specific or all items from array
     * Return default if key not found
     *
     * @param  array       $array
     * @param  string|null $key
     * @param  mixed       $default
     * @return mixed
     *
     * @codeCoverageIgnore
     */
    private function arrGet(array $array, $key = null, $default = null)
    {
        if (is_null($key)) {
            return $array;
        } elseif (array_key_exists($key, $array)) {
            return $array[$key];
        } else {
            return $default;
        }
    }
}
