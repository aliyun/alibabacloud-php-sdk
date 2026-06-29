<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\RotateTokenPlanKeyResponseBody;

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
    public $maskedApiKey;

    /**
     * @var string
     */
    public $plainApiKey;

    /**
     * @var string
     */
    public $resetAt;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
        'maskedApiKey' => 'MaskedApiKey',
        'plainApiKey' => 'PlainApiKey',
        'resetAt' => 'ResetAt',
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

        if (null !== $this->maskedApiKey) {
            $res['MaskedApiKey'] = $this->maskedApiKey;
        }

        if (null !== $this->plainApiKey) {
            $res['PlainApiKey'] = $this->plainApiKey;
        }

        if (null !== $this->resetAt) {
            $res['ResetAt'] = $this->resetAt;
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

        if (isset($map['MaskedApiKey'])) {
            $model->maskedApiKey = $map['MaskedApiKey'];
        }

        if (isset($map['PlainApiKey'])) {
            $model->plainApiKey = $map['PlainApiKey'];
        }

        if (isset($map['ResetAt'])) {
            $model->resetAt = $map['ResetAt'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
