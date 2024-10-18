<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListQueuesShrinkRequest extends Model
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
     * @description The names of the queues that you want to query. You can specify up to eight names.
     *
     * @var string
     */
    public $queueNamesShrink;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'queueNamesShrink' => 'QueueNames',
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
        if (null !== $this->queueNamesShrink) {
            $res['QueueNames'] = $this->queueNamesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueuesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueueNames'])) {
            $model->queueNamesShrink = $map['QueueNames'];
        }

        return $model;
    }
}
