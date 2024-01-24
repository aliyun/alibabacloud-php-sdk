<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateDrdsInstanceResponseBody\data\drdsInstanceIdList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates the ID of the instance.
     *
     * @var drdsInstanceIdList
     */
    public $drdsInstanceIdList;

    /**
     * @description Indicates the ID of the order.
     *
     * @example 111111111111111
     *
     * @var int
     */
    public $orderId;
    protected $_name = [
        'drdsInstanceIdList' => 'DrdsInstanceIdList',
        'orderId'            => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceIdList) {
            $res['DrdsInstanceIdList'] = null !== $this->drdsInstanceIdList ? $this->drdsInstanceIdList->toMap() : null;
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
        if (isset($map['DrdsInstanceIdList'])) {
            $model->drdsInstanceIdList = drdsInstanceIdList::fromMap($map['DrdsInstanceIdList']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
