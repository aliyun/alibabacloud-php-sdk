<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Hook extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'apiVersion' => 'apiVersion',
        'description' => 'description',
        'enabled' => 'enabled',
        'event' => 'event',
        'headers' => 'headers',
        'timeout' => 'timeout',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['apiVersion'] = $this->apiVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiVersion'])) {
            $model->apiVersion = $map['apiVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
