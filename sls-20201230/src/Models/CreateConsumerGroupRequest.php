<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
{
    /**
     * @description The name of the consumer group. The name must be unique in a project.
     *
     * This parameter is required.
     * @example consumerGroupX
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description Specifies whether to consume data in sequence. Valid values:
     *
     *   true
     *
     *   In a shard, data is consumed in ascending order based on the value of the \\*\\*__tag__:__receive_time__\\*\\* field.
     *   If a shard is split, data in the original shard is consumed first. Then, data in the new shards is consumed at the same time.
     *   If shards are merged, data in the original shards is consumed first. Then, data in the new shard is consumed.
     *
     *   false Data in all shards is consumed at the same time. If a new shard is generated after a shard is split or after shards are merged, data in the new shard is immediately consumed.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $order;

    /**
     * @description The timeout period. If the server does not receive heartbeats from a consumer within the timeout period, the server deletes the consumer. Unit: seconds.
     *
     * This parameter is required.
     * @example 300
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'consumerGroup' => 'consumerGroup',
        'order'         => 'order',
        'timeout'       => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroup) {
            $res['consumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['consumerGroup'])) {
            $model->consumerGroup = $map['consumerGroup'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
