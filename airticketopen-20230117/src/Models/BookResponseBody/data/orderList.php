<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookResponseBody\data\orderList\orderAttribute;

class orderList extends Model
{
    /**
     * @var orderAttribute
     */
    public $orderAttribute;

    /**
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'orderAttribute' => 'order_attribute',
        'orderNum' => 'order_num',
    ];

    public function validate()
    {
        if (null !== $this->orderAttribute) {
            $this->orderAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderAttribute) {
            $res['order_attribute'] = null !== $this->orderAttribute ? $this->orderAttribute->toArray($noStream) : $this->orderAttribute;
        }

        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
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
        if (isset($map['order_attribute'])) {
            $model->orderAttribute = orderAttribute::fromMap($map['order_attribute']);
        }

        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}
