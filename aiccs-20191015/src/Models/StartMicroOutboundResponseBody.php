<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class StartMicroOutboundResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $customerInfo;
    /**
     * @var string
     */
    public $invokeCmdId;
    /**
     * @var string
     */
    public $invokeCreateTime;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'             => 'Code',
        'customerInfo'     => 'CustomerInfo',
        'invokeCmdId'      => 'InvokeCmdId',
        'invokeCreateTime' => 'InvokeCreateTime',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->customerInfo) {
            $res['CustomerInfo'] = $this->customerInfo;
        }

        if (null !== $this->invokeCmdId) {
            $res['InvokeCmdId'] = $this->invokeCmdId;
        }

        if (null !== $this->invokeCreateTime) {
            $res['InvokeCreateTime'] = $this->invokeCreateTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CustomerInfo'])) {
            $model->customerInfo = $map['CustomerInfo'];
        }

        if (isset($map['InvokeCmdId'])) {
            $model->invokeCmdId = $map['InvokeCmdId'];
        }

        if (isset($map['InvokeCreateTime'])) {
            $model->invokeCreateTime = $map['InvokeCreateTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
