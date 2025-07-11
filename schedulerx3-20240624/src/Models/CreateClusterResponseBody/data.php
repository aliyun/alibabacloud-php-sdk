<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example xxljob-b21969c2309
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 229317760970086
     *
     * @var int
     */
    public $orderId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'orderId' => 'OrderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
