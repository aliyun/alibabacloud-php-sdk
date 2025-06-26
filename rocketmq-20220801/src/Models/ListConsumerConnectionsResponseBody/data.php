<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListConsumerConnectionsResponseBody\data\connections;

class data extends Model
{
    /**
     * @var connections[]
     */
    public $connections;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connections' => 'connections',
        'consumerGroupId' => 'consumerGroupId',
        'instanceId' => 'instanceId',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->connections)) {
            Model::validateArray($this->connections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connections) {
            if (\is_array($this->connections)) {
                $res['connections'] = [];
                $n1 = 0;
                foreach ($this->connections as $item1) {
                    $res['connections'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['connections'])) {
            if (!empty($map['connections'])) {
                $model->connections = [];
                $n1 = 0;
                foreach ($map['connections'] as $item1) {
                    $model->connections[$n1] = connections::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
