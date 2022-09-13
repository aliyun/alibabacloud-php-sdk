<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponseBody;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetConsumerGroupResponseBody\data\consumeRetryPolicy;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var consumeRetryPolicy
     */
    public $consumeRetryPolicy;

    /**
     * @var string
     */
    public $consumerGroupId;

    /**
     * @var string
     */
    public $createTime;

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
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'consumeRetryPolicy' => 'consumeRetryPolicy',
        'consumerGroupId'    => 'consumerGroupId',
        'createTime'         => 'createTime',
        'deliveryOrderType'  => 'deliveryOrderType',
        'instanceId'         => 'instanceId',
        'regionId'           => 'regionId',
        'remark'             => 'remark',
        'status'             => 'status',
        'updateTime'         => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeRetryPolicy) {
            $res['consumeRetryPolicy'] = null !== $this->consumeRetryPolicy ? $this->consumeRetryPolicy->toMap() : null;
        }
        if (null !== $this->consumerGroupId) {
            $res['consumerGroupId'] = $this->consumerGroupId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->deliveryOrderType) {
            $res['deliveryOrderType'] = $this->deliveryOrderType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumeRetryPolicy'])) {
            $model->consumeRetryPolicy = consumeRetryPolicy::fromMap($map['consumeRetryPolicy']);
        }
        if (isset($map['consumerGroupId'])) {
            $model->consumerGroupId = $map['consumerGroupId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['deliveryOrderType'])) {
            $model->deliveryOrderType = $map['deliveryOrderType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
