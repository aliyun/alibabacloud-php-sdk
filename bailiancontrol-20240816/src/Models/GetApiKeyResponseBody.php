<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey;

class GetApiKeyResponseBody extends Model
{
    /**
     * @var apiKey
     */
    public $apiKey;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'apiKey' => 'apiKey',
        'code' => 'code',
        'httpStatusCode' => 'httpStatusCode',
        'message' => 'message',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate()
    {
        if (null !== $this->apiKey) {
            $this->apiKey->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = null !== $this->apiKey ? $this->apiKey->toArray($noStream) : $this->apiKey;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['httpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = apiKey::fromMap($map['apiKey']);
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['httpStatusCode'])) {
            $model->httpStatusCode = $map['httpStatusCode'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
