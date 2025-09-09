<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody\data\drdsInstanceIdList;

class data extends Model
{
    /**
     * @var drdsInstanceIdList
     */
    public $drdsInstanceIdList;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'drdsInstanceIdList' => 'DrdsInstanceIdList',
        'orderId' => 'OrderId',
    ];

    public function validate()
    {
        if (null !== $this->drdsInstanceIdList) {
            $this->drdsInstanceIdList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->drdsInstanceIdList) {
            $res['DrdsInstanceIdList'] = null !== $this->drdsInstanceIdList ? $this->drdsInstanceIdList->toArray($noStream) : $this->drdsInstanceIdList;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceIdList'])) {
            $model->drdsInstanceIdList = drdsInstanceIdList::fromMap($map['DrdsInstanceIdList']);
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
