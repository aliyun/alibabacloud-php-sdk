<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $rrpcCode;

    /**
     * @var string
     */
    public $payloadBase64Byte;

    /**
     * @var int
     */
    public $messageId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'code'              => 'Code',
        'errorMessage'      => 'ErrorMessage',
        'rrpcCode'          => 'RrpcCode',
        'payloadBase64Byte' => 'PayloadBase64Byte',
        'messageId'         => 'MessageId',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->rrpcCode) {
            $res['RrpcCode'] = $this->rrpcCode;
        }
        if (null !== $this->payloadBase64Byte) {
            $res['PayloadBase64Byte'] = $this->payloadBase64Byte;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RRpcResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RrpcCode'])) {
            $model->rrpcCode = $map['RrpcCode'];
        }
        if (isset($map['PayloadBase64Byte'])) {
            $model->payloadBase64Byte = $map['PayloadBase64Byte'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
