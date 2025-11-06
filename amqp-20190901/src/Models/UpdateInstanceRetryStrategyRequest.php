<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRetryStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $retryInterval;

    /**
     * @var int
     */
    public $retryTimes;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'retryInterval' => 'RetryInterval',
        'retryTimes' => 'RetryTimes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->retryInterval) {
            $res['RetryInterval'] = $this->retryInterval;
        }

        if (null !== $this->retryTimes) {
            $res['RetryTimes'] = $this->retryTimes;
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
        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RetryInterval'])) {
            $model->retryInterval = $map['RetryInterval'];
        }

        if (isset($map['RetryTimes'])) {
            $model->retryTimes = $map['RetryTimes'];
        }

        return $model;
    }
}
