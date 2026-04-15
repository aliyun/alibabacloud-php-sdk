<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryPayOrderToMsenceResponseBody\mpaasUserGamecenterPaymentQuerystatusResponse;

class QueryPayOrderToMsenceResponseBody extends Model
{
    /**
     * @var mpaasUserGamecenterPaymentQuerystatusResponse
     */
    public $mpaasUserGamecenterPaymentQuerystatusResponse;

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
        'mpaasUserGamecenterPaymentQuerystatusResponse' => 'MpaasUserGamecenterPaymentQuerystatusResponse',
        'requestId' => 'RequestId',
        'resultCode' => 'ResultCode',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->mpaasUserGamecenterPaymentQuerystatusResponse) {
            $this->mpaasUserGamecenterPaymentQuerystatusResponse->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mpaasUserGamecenterPaymentQuerystatusResponse) {
            $res['MpaasUserGamecenterPaymentQuerystatusResponse'] = null !== $this->mpaasUserGamecenterPaymentQuerystatusResponse ? $this->mpaasUserGamecenterPaymentQuerystatusResponse->toArray($noStream) : $this->mpaasUserGamecenterPaymentQuerystatusResponse;
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
        if (isset($map['MpaasUserGamecenterPaymentQuerystatusResponse'])) {
            $model->mpaasUserGamecenterPaymentQuerystatusResponse = mpaasUserGamecenterPaymentQuerystatusResponse::fromMap($map['MpaasUserGamecenterPaymentQuerystatusResponse']);
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
