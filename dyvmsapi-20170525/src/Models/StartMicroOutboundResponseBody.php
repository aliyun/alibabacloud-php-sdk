<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class StartMicroOutboundResponseBody extends Model
{
    /**
     * @var string
     */
    public $customerInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $invokeCmdId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $invokeCreateTime;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'customerInfo'     => 'CustomerInfo',
        'requestId'        => 'RequestId',
        'invokeCmdId'      => 'InvokeCmdId',
        'code'             => 'Code',
        'invokeCreateTime' => 'InvokeCreateTime',
        'message'          => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerInfo) {
            $res['CustomerInfo'] = $this->customerInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->invokeCmdId) {
            $res['InvokeCmdId'] = $this->invokeCmdId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->invokeCreateTime) {
            $res['InvokeCreateTime'] = $this->invokeCreateTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartMicroOutboundResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerInfo'])) {
            $model->customerInfo = $map['CustomerInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InvokeCmdId'])) {
            $model->invokeCmdId = $map['InvokeCmdId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InvokeCreateTime'])) {
            $model->invokeCreateTime = $map['InvokeCreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
