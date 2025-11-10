<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest\consumeRetryPolicy;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @var consumeRetryPolicy
     */
    public $consumeRetryPolicy;

    /**
     * @var string
     */
    public $deliveryOrderType;

    /**
     * @var int
     */
    public $maxReceiveTps;

    /**
     * @var string
     */
    public $messageModel;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'consumeRetryPolicy' => 'consumeRetryPolicy',
        'deliveryOrderType' => 'deliveryOrderType',
        'maxReceiveTps' => 'maxReceiveTps',
        'messageModel' => 'messageModel',
        'remark' => 'remark',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        if (null !== $this->consumeRetryPolicy) {
            $this->consumeRetryPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumeRetryPolicy) {
            $res['consumeRetryPolicy'] = null !== $this->consumeRetryPolicy ? $this->consumeRetryPolicy->toArray($noStream) : $this->consumeRetryPolicy;
        }

        if (null !== $this->deliveryOrderType) {
            $res['deliveryOrderType'] = $this->deliveryOrderType;
        }

        if (null !== $this->maxReceiveTps) {
            $res['maxReceiveTps'] = $this->maxReceiveTps;
        }

        if (null !== $this->messageModel) {
            $res['messageModel'] = $this->messageModel;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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
        if (isset($map['consumeRetryPolicy'])) {
            $model->consumeRetryPolicy = consumeRetryPolicy::fromMap($map['consumeRetryPolicy']);
        }

        if (isset($map['deliveryOrderType'])) {
            $model->deliveryOrderType = $map['deliveryOrderType'];
        }

        if (isset($map['maxReceiveTps'])) {
            $model->maxReceiveTps = $map['maxReceiveTps'];
        }

        if (isset($map['messageModel'])) {
            $model->messageModel = $map['messageModel'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
