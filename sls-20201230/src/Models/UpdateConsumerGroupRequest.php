<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateConsumerGroupRequest extends Model
{
    /**
     * @description Specifies whether to consume data in sequence. Valid values:
     *
     *   true: If a shard is split, the data in the original shard is consumed first. Then, the data in the new shards is consumed at the same time. If shards are merged, the data in the original shards is consumed first. Then, the data in the new shard is consumed.
     *   false: The data in all shards is consumed at the same time. If a new shard is generated after a shard is split or shards are merged, the data in the new shard is immediately consumed.
     *
     * @example true
     *
     * @var bool
     */
    public $order;

    /**
     * @description The timeout period. If Simple Log Service does not receive heartbeats from a consumer within the timeout period, Simple Log Service deletes the consumer. Unit: seconds.
     *
     * @example 300
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'order'   => 'order',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return UpdateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
