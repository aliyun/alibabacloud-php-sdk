<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateConsumerGroupRequest\consumeRetryPolicy;
use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @description The consumption retry policy that you want to configure for the consumer group. For more information, see [Consumption retry](~~440356~~).
     *
     * @var consumeRetryPolicy
     */
    public $consumeRetryPolicy;

    /**
     * @description The message delivery order of the consumer group.
     *
     * Valid values:
     *
     *   Concurrently: concurrent delivery
     *   Orderly: ordered delivery
     *
     * @example Concurrently
     *
     * @var string
     */
    public $deliveryOrderType;

    /**
     * @description The remarks on the consumer group.
     *
     * @example This is the remark for test.
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'consumeRetryPolicy' => 'consumeRetryPolicy',
        'deliveryOrderType'  => 'deliveryOrderType',
        'remark'             => 'remark',
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
        if (null !== $this->deliveryOrderType) {
            $res['deliveryOrderType'] = $this->deliveryOrderType;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['consumeRetryPolicy'])) {
            $model->consumeRetryPolicy = consumeRetryPolicy::fromMap($map['consumeRetryPolicy']);
        }
        if (isset($map['deliveryOrderType'])) {
            $model->deliveryOrderType = $map['deliveryOrderType'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
