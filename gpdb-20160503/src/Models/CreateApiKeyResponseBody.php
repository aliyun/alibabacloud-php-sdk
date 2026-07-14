<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateApiKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'keyId' => 'KeyId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
