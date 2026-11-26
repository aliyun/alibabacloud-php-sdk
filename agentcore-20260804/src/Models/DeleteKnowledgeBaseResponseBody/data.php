<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteKnowledgeBaseResponseBody\data\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteKnowledgeBaseResponseBody\data\lastError;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteKnowledgeBaseResponseBody\data\metadataSchema;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteKnowledgeBaseResponseBody\data\searchConfiguration;

class data extends Model
{
    /**
     * @var chunkConfiguration
     */
    public $chunkConfiguration;

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
    public $embeddingDimension;

    /**
     * @var string
     */
    public $embeddingModel;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var lastError
     */
    public $lastError;

    /**
     * @var metadataSchema[]
     */
    public $metadataSchema;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var searchConfiguration
     */
    public $searchConfiguration;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'chunkConfiguration' => 'chunkConfiguration',
        'createdAt' => 'createdAt',
        'description' => 'description',
        'embeddingDimension' => 'embeddingDimension',
        'embeddingModel' => 'embeddingModel',
        'knowledgeBaseId' => 'knowledgeBaseId',
        'lastError' => 'lastError',
        'metadataSchema' => 'metadataSchema',
        'name' => 'name',
        'regionId' => 'regionId',
        'searchConfiguration' => 'searchConfiguration',
        'status' => 'status',
        'tenantId' => 'tenantId',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
        }
        if (null !== $this->lastError) {
            $this->lastError->validate();
        }
        if (\is_array($this->metadataSchema)) {
            Model::validateArray($this->metadataSchema);
        }
        if (null !== $this->searchConfiguration) {
            $this->searchConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->embeddingDimension) {
            $res['embeddingDimension'] = $this->embeddingDimension;
        }

        if (null !== $this->embeddingModel) {
            $res['embeddingModel'] = $this->embeddingModel;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = null !== $this->lastError ? $this->lastError->toArray($noStream) : $this->lastError;
        }

        if (null !== $this->metadataSchema) {
            if (\is_array($this->metadataSchema)) {
                $res['metadataSchema'] = [];
                $n1 = 0;
                foreach ($this->metadataSchema as $item1) {
                    $res['metadataSchema'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->searchConfiguration) {
            $res['searchConfiguration'] = null !== $this->searchConfiguration ? $this->searchConfiguration->toArray($noStream) : $this->searchConfiguration;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['chunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['chunkConfiguration']);
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['embeddingDimension'])) {
            $model->embeddingDimension = $map['embeddingDimension'];
        }

        if (isset($map['embeddingModel'])) {
            $model->embeddingModel = $map['embeddingModel'];
        }

        if (isset($map['knowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['knowledgeBaseId'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = lastError::fromMap($map['lastError']);
        }

        if (isset($map['metadataSchema'])) {
            if (!empty($map['metadataSchema'])) {
                $model->metadataSchema = [];
                $n1 = 0;
                foreach ($map['metadataSchema'] as $item1) {
                    $model->metadataSchema[$n1] = metadataSchema::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['searchConfiguration'])) {
            $model->searchConfiguration = searchConfiguration::fromMap($map['searchConfiguration']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
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
