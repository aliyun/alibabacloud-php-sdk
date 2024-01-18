<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class OrderDetailRequest extends Model
{
    /**
     * @example 4966***617111
     *
     * @var int
     */
    public $orderNum;

    /**
     * @example x091-2023-0220-j-0001
     *
     * @var string
     */
    public $outOrderNum;
    protected $_name = [
        'orderNum'    => 'order_num',
        'outOrderNum' => 'out_order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }
        if (null !== $this->outOrderNum) {
            $res['out_order_num'] = $this->outOrderNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }
        if (isset($map['out_order_num'])) {
            $model->outOrderNum = $map['out_order_num'];
        }

        return $model;
    }
}
