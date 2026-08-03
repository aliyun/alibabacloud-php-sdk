<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelCreateOrderResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'orderNo' => 'OrderNo',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
