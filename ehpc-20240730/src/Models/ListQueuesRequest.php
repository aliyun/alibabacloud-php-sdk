<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListQueuesRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $queueNames;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'queueNames' => 'QueueNames',
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
        if (null !== $this->queueNames) {
            $res['QueueNames'] = $this->queueNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueueNames'])) {
            if (!empty($map['QueueNames'])) {
                $model->queueNames = $map['QueueNames'];
            }
        }

        return $model;
    }
}
