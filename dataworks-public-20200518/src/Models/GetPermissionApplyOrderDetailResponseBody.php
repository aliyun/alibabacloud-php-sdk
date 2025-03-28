<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

class GetPermissionApplyOrderDetailResponseBody extends Model
{
    /**
     * @var applyOrderDetail
     */
    public $applyOrderDetail;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applyOrderDetail' => 'ApplyOrderDetail',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applyOrderDetail) {
            $this->applyOrderDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyOrderDetail) {
            $res['ApplyOrderDetail'] = null !== $this->applyOrderDetail ? $this->applyOrderDetail->toArray($noStream) : $this->applyOrderDetail;
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
        if (isset($map['ApplyOrderDetail'])) {
            $model->applyOrderDetail = applyOrderDetail::fromMap($map['ApplyOrderDetail']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
