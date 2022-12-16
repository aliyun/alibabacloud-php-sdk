<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;
use AlibabaCloud\Tea\Model;

class GetPermissionApplyOrderDetailResponseBody extends Model
{
    /**
     * @var applyOrderDetail
     */
    public $applyOrderDetail;

    /**
     * @example 0bc1ec92159376****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applyOrderDetail' => 'ApplyOrderDetail',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyOrderDetail) {
            $res['ApplyOrderDetail'] = null !== $this->applyOrderDetail ? $this->applyOrderDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApplyOrderDetail'])) {
            $model->applyOrderDetail = applyOrderDetail::fromMap($map['ApplyOrderDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
