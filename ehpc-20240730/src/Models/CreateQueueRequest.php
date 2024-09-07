<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateQueueRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The configurations of the queue to be created.
     *
     * @var QueueTemplate
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
     * @return CreateQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Queue'])) {
            $model->queue = QueueTemplate::fromMap($map['Queue']);
        }

        return $model;
    }
}
