<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class TicketingRequest extends Model
{
    /**
     * @example 496***2617111
     *
     * @var int
     */
    public $orderNum;
    protected $_name = [
        'orderNum' => 'order_num',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TicketingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        return $model;
    }
}
