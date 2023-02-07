<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class StartMicroOutboundResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {\"caseId\":2323****}
     *
     * @var string
     */
    public $customerInfo;

    /**
     * @example 8883f165-4a0d-4da2-a2d2
     *
     * @var string
     */
    public $invokeCmdId;

    /**
     * @example 2019-05-23 17:30:32.525
     *
     * @var string
     */
    public $invokeCreateTime;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example EE338D98-9BD3-4413-B165
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return StartMicroOutboundResponseBody
     */
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
