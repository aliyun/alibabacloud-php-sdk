<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody\data\chunkConfiguration;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody\data\lastError;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody\data\metadata;

class data extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var chunkConfiguration
     */
    public $chunkConfiguration;

    /**
     * @var int
     */
    public $chunkCount;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var lastError
     */
    public $lastError;

    /**
     * @var metadata[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publishedResultAvailable;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var int
     */
    public $sourceModifiedTime;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceUri;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'assetId' => 'assetId',
        'chunkConfiguration' => 'chunkConfiguration',
        'chunkCount' => 'chunkCount',
        'contentType' => 'contentType',
        'createdAt' => 'createdAt',
        'enabled' => 'enabled',
        'fileName' => 'fileName',
        'knowledgeBaseId' => 'knowledgeBaseId',
        'lastError' => 'lastError',
        'metadata' => 'metadata',
        'name' => 'name',
        'publishedResultAvailable' => 'publishedResultAvailable',
        'sizeBytes' => 'sizeBytes',
        'sourceModifiedTime' => 'sourceModifiedTime',
        'sourceType' => 'sourceType',
        'sourceUri' => 'sourceUri',
        'status' => 'status',
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
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->chunkConfiguration) {
            $res['chunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->chunkCount) {
            $res['chunkCount'] = $this->chunkCount;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = null !== $this->lastError ? $this->lastError->toArray($noStream) : $this->lastError;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                $n1 = 0;
                foreach ($this->metadata as $item1) {
                    $res['metadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publishedResultAvailable) {
            $res['publishedResultAvailable'] = $this->publishedResultAvailable;
        }

        if (null !== $this->sizeBytes) {
            $res['sizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->sourceModifiedTime) {
            $res['sourceModifiedTime'] = $this->sourceModifiedTime;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceUri) {
            $res['sourceUri'] = $this->sourceUri;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['assetId'])) {
            $model->assetId = $map['assetId'];
        }

        if (isset($map['chunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['chunkConfiguration']);
        }

        if (isset($map['chunkCount'])) {
            $model->chunkCount = $map['chunkCount'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['knowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['knowledgeBaseId'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = lastError::fromMap($map['lastError']);
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                $n1 = 0;
                foreach ($map['metadata'] as $item1) {
                    $model->metadata[$n1] = metadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publishedResultAvailable'])) {
            $model->publishedResultAvailable = $map['publishedResultAvailable'];
        }

        if (isset($map['sizeBytes'])) {
            $model->sizeBytes = $map['sizeBytes'];
        }

        if (isset($map['sourceModifiedTime'])) {
            $model->sourceModifiedTime = $map['sourceModifiedTime'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['sourceUri'])) {
            $model->sourceUri = $map['sourceUri'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
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
