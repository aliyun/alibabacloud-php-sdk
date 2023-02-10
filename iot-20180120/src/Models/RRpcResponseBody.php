<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcResponseBody extends Model
{
    /**
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example 889455942124347392
     *
     * @var int
     */
    public $messageId;

    /**
     * @example d29ybGQgaGVsbG8=
     *
     * @var string
     */
    public $payloadBase64Byte;

    /**
     * @example 41C4265E-F05D-4E2E-AB09-E031F501AF7F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $rrpcCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'errorMessage'      => 'ErrorMessage',
        'messageId'         => 'MessageId',
        'payloadBase64Byte' => 'PayloadBase64Byte',
        'requestId'         => 'RequestId',
        'rrpcCode'          => 'RrpcCode',
        'success'           => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->payloadBase64Byte) {
            $res['PayloadBase64Byte'] = $this->payloadBase64Byte;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rrpcCode) {
            $res['RrpcCode'] = $this->rrpcCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['PayloadBase64Byte'])) {
            $model->payloadBase64Byte = $map['PayloadBase64Byte'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RrpcCode'])) {
            $model->rrpcCode = $map['RrpcCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
