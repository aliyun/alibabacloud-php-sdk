<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class StartMicroOutboundResponseBody extends Model
{
    /**
     * @var string
     */
    public $invokeCreateTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $invokeCmdId;

    /**
     * @var string
     */
    public $customerInfo;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'invokeCreateTime' => 'InvokeCreateTime',
        'requestId'        => 'RequestId',
        'message'          => 'Message',
        'invokeCmdId'      => 'InvokeCmdId',
        'customerInfo'     => 'CustomerInfo',
        'code'             => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeCreateTime) {
            $res['InvokeCreateTime'] = $this->invokeCreateTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->invokeCmdId) {
            $res['InvokeCmdId'] = $this->invokeCmdId;
        }
        if (null !== $this->customerInfo) {
            $res['CustomerInfo'] = $this->customerInfo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['InvokeCreateTime'])) {
            $model->invokeCreateTime = $map['InvokeCreateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['InvokeCmdId'])) {
            $model->invokeCmdId = $map['InvokeCmdId'];
        }
        if (isset($map['CustomerInfo'])) {
            $model->customerInfo = $map['CustomerInfo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
