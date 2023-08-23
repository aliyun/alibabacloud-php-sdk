<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 20220714150702000168270112410630
     *
     * @var string
     */
    public $orderNo;
    protected $_name = [
        'orderNo' => 'OrderNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        return $model;
    }
}
