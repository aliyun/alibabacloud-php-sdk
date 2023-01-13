<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class RRpcResponse extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $messageId;

    /**
     * @var string
     */
    public $payloadBase64Byte;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rrpcCode;

    /**
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
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('messageId', $this->messageId, true);
        Model::validateRequired('payloadBase64Byte', $this->payloadBase64Byte, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('rrpcCode', $this->rrpcCode, true);
        Model::validateRequired('success', $this->success, true);
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
     * @return RRpcResponse
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
