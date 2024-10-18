<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class UpdateQueueShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about the queue to be updated.
     *
     * @var string
     */
    public $queueShrink;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'queueShrink' => 'Queue',
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
        if (null !== $this->queueShrink) {
            $res['Queue'] = $this->queueShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQueueShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Queue'])) {
            $model->queueShrink = $map['Queue'];
        }

        return $model;
    }
}
