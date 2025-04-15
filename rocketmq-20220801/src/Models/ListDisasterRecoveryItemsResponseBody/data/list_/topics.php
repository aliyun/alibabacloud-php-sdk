<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListDisasterRecoveryItemsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class topics extends Model
{
    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $deliveryOrderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consumerGroupId' => 'consumerGroupId',
        'deliveryOrderType' => 'deliveryOrderType',
        'instanceId' => 'instanceId',
        'instanceType' => 'instanceType',
        'regionId' => 'regionId',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }

        if (null !== $this->deliveryOrderType) {
            $res['deliveryOrderType'] = $this->deliveryOrderType;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }

        if (isset($map['deliveryOrderType'])) {
            $model->deliveryOrderType = $map['deliveryOrderType'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
