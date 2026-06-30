<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelOperatorApiKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $apiKeyId;

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
    public $endpoint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'apiKeyId' => 'ApiKeyId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'endpoint' => 'Endpoint',
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

        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
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

        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
