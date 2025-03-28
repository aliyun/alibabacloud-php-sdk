<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders;

class ListPermissionApplyOrdersResponseBody extends Model
{
    /**
     * @var applyOrders
     */
    public $applyOrders;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applyOrders' => 'ApplyOrders',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applyOrders) {
            $this->applyOrders->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyOrders) {
            $res['ApplyOrders'] = null !== $this->applyOrders ? $this->applyOrders->toArray($noStream) : $this->applyOrders;
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
        if (isset($map['ApplyOrders'])) {
            $model->applyOrders = applyOrders::fromMap($map['ApplyOrders']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
