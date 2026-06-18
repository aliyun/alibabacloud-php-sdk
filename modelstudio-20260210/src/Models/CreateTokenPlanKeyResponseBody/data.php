<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\CreateTokenPlanKeyResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $maskedApiKey;

    /**
     * @var string
     */
    public $plainApiKey;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'maskedApiKey' => 'MaskedApiKey',
        'plainApiKey' => 'PlainApiKey',
        'sourceId' => 'SourceId',
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

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->maskedApiKey) {
            $res['MaskedApiKey'] = $this->maskedApiKey;
        }

        if (null !== $this->plainApiKey) {
            $res['PlainApiKey'] = $this->plainApiKey;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MaskedApiKey'])) {
            $model->maskedApiKey = $map['MaskedApiKey'];
        }

        if (isset($map['PlainApiKey'])) {
            $model->plainApiKey = $map['PlainApiKey'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
