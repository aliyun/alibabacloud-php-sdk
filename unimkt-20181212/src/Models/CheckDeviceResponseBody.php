<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\SDK\UniMkt\V20181212\Models\CheckDeviceResponseBody\plans;
use AlibabaCloud\Tea\Model;

class CheckDeviceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var plans
     */
    public $plans;
    protected $_name = [
        'status'    => 'Status',
        'msg'       => 'Msg',
        'requestId' => 'RequestId',
        'errorCode' => 'ErrorCode',
        'plans'     => 'Plans',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->plans) {
            $res['Plans'] = null !== $this->plans ? $this->plans->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Plans'])) {
            $model->plans = plans::fromMap($map['Plans']);
        }

        return $model;
    }
}
