<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class RefundDetailRequest extends Model
{
    /**
     * @example 4966***617732
     *
     * @var int
     */
    public $refundOrderNum;
    protected $_name = [
        'refundOrderNum' => 'refund_order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refundOrderNum) {
            $res['refund_order_num'] = $this->refundOrderNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['refund_order_num'])) {
            $model->refundOrderNum = $map['refund_order_num'];
        }

        return $model;
    }
}
