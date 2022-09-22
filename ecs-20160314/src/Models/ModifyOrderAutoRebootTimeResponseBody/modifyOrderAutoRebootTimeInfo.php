<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyOrderAutoRebootTimeResponseBody;

use AlibabaCloud\Tea\Model;

class modifyOrderAutoRebootTimeInfo extends Model
{
    /**
     * @var string
     */
    public $autoRebootTime;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'autoRebootTime' => 'AutoRebootTime',
        'orderId'        => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRebootTime) {
            $res['AutoRebootTime'] = $this->autoRebootTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifyOrderAutoRebootTimeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRebootTime'])) {
            $model->autoRebootTime = $map['AutoRebootTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
