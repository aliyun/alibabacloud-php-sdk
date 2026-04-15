<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\VirtualDeliveryToMsceneResponseBody\mpaasUserGamecenterPaymentVirtualdeliveryResponse;

class VirtualDeliveryToMsceneResponseBody extends Model
{
    /**
     * @var mpaasUserGamecenterPaymentVirtualdeliveryResponse
     */
    public $mpaasUserGamecenterPaymentVirtualdeliveryResponse;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'mpaasUserGamecenterPaymentVirtualdeliveryResponse' => 'MpaasUserGamecenterPaymentVirtualdeliveryResponse',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse) {
            $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse) {
            $res['MpaasUserGamecenterPaymentVirtualdeliveryResponse'] = null !== $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse ? $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse->toArray($noStream) : $this->mpaasUserGamecenterPaymentVirtualdeliveryResponse;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['MpaasUserGamecenterPaymentVirtualdeliveryResponse'])) {
            $model->mpaasUserGamecenterPaymentVirtualdeliveryResponse = mpaasUserGamecenterPaymentVirtualdeliveryResponse::fromMap($map['MpaasUserGamecenterPaymentVirtualdeliveryResponse']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
