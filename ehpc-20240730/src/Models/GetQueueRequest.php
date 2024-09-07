<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class GetQueueRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example comp
     *
     * @var string
     */
    public $queueName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'queueName' => 'QueueName',
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
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
