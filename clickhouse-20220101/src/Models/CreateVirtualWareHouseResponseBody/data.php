<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\CreateVirtualWareHouseResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 21155221661****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example vw-bp1w2728d535t****
     *
     * @var string
     */
    public $virtualWareHouseId;
    protected $_name = [
        'orderId'            => 'OrderId',
        'virtualWareHouseId' => 'VirtualWareHouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->virtualWareHouseId) {
            $res['VirtualWareHouseId'] = $this->virtualWareHouseId;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['VirtualWareHouseId'])) {
            $model->virtualWareHouseId = $map['VirtualWareHouseId'];
        }

        return $model;
    }
}
