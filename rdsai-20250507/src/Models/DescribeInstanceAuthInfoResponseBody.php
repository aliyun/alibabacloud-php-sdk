<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeInstanceAuthInfoResponseBody\apiKeys;

class DescribeInstanceAuthInfoResponseBody extends Model
{
    /**
     * @var apiKeys
     */
    public $apiKeys;

    /**
     * @var string
     */
    public $jwtSecret;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKeys' => 'ApiKeys',
        'jwtSecret' => 'JwtSecret',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apiKeys) {
            $this->apiKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeys) {
            $res['ApiKeys'] = null !== $this->apiKeys ? $this->apiKeys->toArray($noStream) : $this->apiKeys;
        }

        if (null !== $this->jwtSecret) {
            $res['JwtSecret'] = $this->jwtSecret;
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
        if (isset($map['ApiKeys'])) {
            $model->apiKeys = apiKeys::fromMap($map['ApiKeys']);
        }

        if (isset($map['JwtSecret'])) {
            $model->jwtSecret = $map['JwtSecret'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
