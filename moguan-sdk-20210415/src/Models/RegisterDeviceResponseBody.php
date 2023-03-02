<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Moguansdk\V20210415\Models;

use AlibabaCloud\SDK\Moguansdk\V20210415\Models\RegisterDeviceResponseBody\data;
use AlibabaCloud\Tea\Model;

class RegisterDeviceResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 0
     *
     * @var int
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example A68E0F1E-9CEE-4BB9-8880-943730FFD9A9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'         => 'Data',
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return RegisterDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
