<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseApiKeyResponseBody\key;

class CreateContextDatabaseApiKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var key
     */
    public $key;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'key' => 'Key',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->key) {
            $this->key->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->key) {
            $res['Key'] = null !== $this->key ? $this->key->toArray($noStream) : $this->key;
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

        if (isset($map['Key'])) {
            $model->key = key::fromMap($map['Key']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
