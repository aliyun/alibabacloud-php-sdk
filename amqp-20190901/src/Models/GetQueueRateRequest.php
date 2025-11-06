<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class GetQueueRateRequest extends Model
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
     * @var mixed[]
     */
    public $queueNames;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'instanceId' => 'InstanceId',
        'queueNames' => 'QueueNames',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        if (\is_array($this->queueNames)) {
            Model::validateArray($this->queueNames);
        }
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

        if (null !== $this->queueNames) {
            if (\is_array($this->queueNames)) {
                $res['QueueNames'] = [];
                foreach ($this->queueNames as $key1 => $value1) {
                    $res['QueueNames'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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

        if (isset($map['QueueNames'])) {
            if (!empty($map['QueueNames'])) {
                $model->queueNames = [];
                foreach ($map['QueueNames'] as $key1 => $value1) {
                    $model->queueNames[$key1] = $value1;
                }
            }
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
