<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class OrderDetailRequest extends Model
{
    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var string
     */
    public $outOrderNum;
    protected $_name = [
        'orderNum' => 'order_num',
        'outOrderNum' => 'out_order_num',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
