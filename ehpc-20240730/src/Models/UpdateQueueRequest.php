<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateQueueRequest\queue;
use AlibabaCloud\Tea\Model;

class UpdateQueueRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var queue
     */
    public $queue;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'queue'     => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->queue) {
            $res['Queue'] = null !== $this->queue ? $this->queue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Queue'])) {
            $model->queue = queue::fromMap($map['Queue']);
        }

        return $model;
    }
}
