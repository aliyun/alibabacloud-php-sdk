<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class ConsumerAPIKey extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $consumerApiKeyId;

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
    public $lastUpdatedAt;

    /**
     * @var string
     */
    public $maskedKey;

    /**
     * @var string
     */
    public $modelConnectionId;
    protected $_name = [
        'active' => 'active',
        'consumerApiKeyId' => 'consumerApiKeyId',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'lastUpdatedAt' => 'lastUpdatedAt',
        'maskedKey' => 'maskedKey',
        'modelConnectionId' => 'modelConnectionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->consumerApiKeyId) {
            $res['consumerApiKeyId'] = $this->consumerApiKeyId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->lastUpdatedAt) {
            $res['lastUpdatedAt'] = $this->lastUpdatedAt;
        }

        if (null !== $this->maskedKey) {
            $res['maskedKey'] = $this->maskedKey;
        }

        if (null !== $this->modelConnectionId) {
            $res['modelConnectionId'] = $this->modelConnectionId;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['consumerApiKeyId'])) {
            $model->consumerApiKeyId = $map['consumerApiKeyId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['lastUpdatedAt'])) {
            $model->lastUpdatedAt = $map['lastUpdatedAt'];
        }

        if (isset($map['maskedKey'])) {
            $model->maskedKey = $map['maskedKey'];
        }

        if (isset($map['modelConnectionId'])) {
            $model->modelConnectionId = $map['modelConnectionId'];
        }

        return $model;
    }
}
