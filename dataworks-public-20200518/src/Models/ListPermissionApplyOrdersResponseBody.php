<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListPermissionApplyOrdersResponseBody\applyOrders;
use AlibabaCloud\Tea\Model;

class ListPermissionApplyOrdersResponseBody extends Model
{
    /**
     * @description The query results returned by page.
     *
     * @var applyOrders
     */
    public $applyOrders;

    /**
     * @description The request ID.
     *
     * @example 0bc1ec92159376****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applyOrders' => 'ApplyOrders',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyOrders) {
            $res['ApplyOrders'] = null !== $this->applyOrders ? $this->applyOrders->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionApplyOrdersResponseBody
     */
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
