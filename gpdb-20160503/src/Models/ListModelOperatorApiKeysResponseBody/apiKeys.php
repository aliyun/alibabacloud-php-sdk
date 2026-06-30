<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelOperatorApiKeysResponseBody;

use AlibabaCloud\Dara\Model;

class apiKeys extends Model
{
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
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'endpoint' => 'Endpoint',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        return $model;
    }
}
