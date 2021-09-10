<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;
use AlibabaCloud\Tea\Model;

class GetPermissionApplyOrderDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var applyOrderDetail
     */
    public $applyOrderDetail;
    protected $_name = [
        'requestId'        => 'RequestId',
        'applyOrderDetail' => 'ApplyOrderDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->applyOrderDetail) {
            $res['ApplyOrderDetail'] = null !== $this->applyOrderDetail ? $this->applyOrderDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionApplyOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ApplyOrderDetail'])) {
            $model->applyOrderDetail = applyOrderDetail::fromMap($map['ApplyOrderDetail']);
        }

        return $model;
    }
}
