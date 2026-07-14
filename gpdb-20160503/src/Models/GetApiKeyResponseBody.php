<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetApiKeyResponseBody\authServices;

class GetApiKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var authServices[]
     */
    public $authServices;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyPrefix;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'authServices' => 'AuthServices',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'keyId' => 'KeyId',
        'keyName' => 'KeyName',
        'keyPrefix' => 'KeyPrefix',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->authServices)) {
            Model::validateArray($this->authServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->authServices) {
            if (\is_array($this->authServices)) {
                $res['AuthServices'] = [];
                $n1 = 0;
                foreach ($this->authServices as $item1) {
                    $res['AuthServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyPrefix) {
            $res['KeyPrefix'] = $this->keyPrefix;
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

        if (isset($map['AuthServices'])) {
            if (!empty($map['AuthServices'])) {
                $model->authServices = [];
                $n1 = 0;
                foreach ($map['AuthServices'] as $item1) {
                    $model->authServices[$n1] = authServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyPrefix'])) {
            $model->keyPrefix = $map['KeyPrefix'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
