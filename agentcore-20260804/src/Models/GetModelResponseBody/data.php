<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetModelResponseBody\data\capabilities;

class data extends Model
{
    /**
     * @var capabilities
     */
    public $capabilities;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $contextSize;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxTokens;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'capabilities' => 'capabilities',
        'connectionId' => 'connectionId',
        'contextSize' => 'contextSize',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'maxTokens' => 'maxTokens',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'regionId' => 'regionId',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->capabilities) {
            $this->capabilities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['capabilities'] = null !== $this->capabilities ? $this->capabilities->toArray($noStream) : $this->capabilities;
        }

        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->contextSize) {
            $res['contextSize'] = $this->contextSize;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maxTokens) {
            $res['maxTokens'] = $this->maxTokens;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['capabilities'])) {
            $model->capabilities = capabilities::fromMap($map['capabilities']);
        }

        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['contextSize'])) {
            $model->contextSize = $map['contextSize'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maxTokens'])) {
            $model->maxTokens = $map['maxTokens'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
