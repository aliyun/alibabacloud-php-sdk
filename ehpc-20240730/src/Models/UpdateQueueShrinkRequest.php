<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class UpdateQueueShrinkRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
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
