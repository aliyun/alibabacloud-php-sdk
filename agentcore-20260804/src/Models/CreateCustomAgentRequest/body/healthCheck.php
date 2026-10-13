<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest\body;

use AlibabaCloud\Dara\Model;

class healthCheck extends Model
{
    /**
     * @var int
     */
    public $healthyThreshold;

    /**
     * @var int
     */
    public $intervalSeconds;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var int
     */
    public $unhealthyThreshold;
    protected $_name = [
        'healthyThreshold' => 'healthyThreshold',
        'intervalSeconds' => 'intervalSeconds',
        'path' => 'path',
        'port' => 'port',
        'timeoutSeconds' => 'timeoutSeconds',
        'unhealthyThreshold' => 'unhealthyThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthyThreshold) {
            $res['healthyThreshold'] = $this->healthyThreshold;
        }

        if (null !== $this->intervalSeconds) {
            $res['intervalSeconds'] = $this->intervalSeconds;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->timeoutSeconds) {
            $res['timeoutSeconds'] = $this->timeoutSeconds;
        }

        if (null !== $this->unhealthyThreshold) {
            $res['unhealthyThreshold'] = $this->unhealthyThreshold;
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
        if (isset($map['healthyThreshold'])) {
            $model->healthyThreshold = $map['healthyThreshold'];
        }

        if (isset($map['intervalSeconds'])) {
            $model->intervalSeconds = $map['intervalSeconds'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['timeoutSeconds'])) {
            $model->timeoutSeconds = $map['timeoutSeconds'];
        }

        if (isset($map['unhealthyThreshold'])) {
            $model->unhealthyThreshold = $map['unhealthyThreshold'];
        }

        return $model;
    }
}
