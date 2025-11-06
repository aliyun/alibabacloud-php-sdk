<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueRateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $inQps;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $outQps;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'inQps' => 'InQps',
        'instanceId' => 'InstanceId',
        'outQps' => 'OutQps',
        'queueName' => 'QueueName',
        'vhostName' => 'VhostName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inQps) {
            $res['InQps'] = $this->inQps;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->outQps) {
            $res['OutQps'] = $this->outQps;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
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
        if (isset($map['InQps'])) {
            $model->inQps = $map['InQps'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OutQps'])) {
            $model->outQps = $map['OutQps'];
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
