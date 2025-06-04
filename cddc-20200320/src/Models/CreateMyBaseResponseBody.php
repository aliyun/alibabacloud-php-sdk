<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseResponseBody\orderList;

class CreateMyBaseResponseBody extends Model
{
    /**
     * @var orderList
     */
    public $orderList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'orderList' => 'OrderList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->orderList) {
            $this->orderList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderList) {
            $res['OrderList'] = null !== $this->orderList ? $this->orderList->toArray($noStream) : $this->orderList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OrderList'])) {
            $model->orderList = orderList::fromMap($map['OrderList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
