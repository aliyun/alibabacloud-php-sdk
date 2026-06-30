<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateModelOperatorApiKeyResponseBody extends Model
{
    /**
     * @var int
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
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
        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
