<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DashDeviceConsole\V20250408\Models;

use AlibabaCloud\Dara\Model;

class DeletePromptResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'data' => 'data',
        'errorCode' => 'errorCode',
        'message' => 'message',
        'requestId' => 'requestId',
        'statusCode' => 'statusCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }

        return $model;
    }
}
