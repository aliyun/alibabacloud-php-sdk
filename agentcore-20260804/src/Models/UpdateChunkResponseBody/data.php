<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkResponseBody\data\chunkUpdate;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkResponseBody\data\lastError;

class data extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var chunkUpdate
     */
    public $chunkUpdate;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var lastError
     */
    public $lastError;

    /**
     * @var bool
     */
    public $publishedResultAvailable;

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
        'chunkUpdate' => 'chunkUpdate',
        'knowledgeBaseId' => 'knowledgeBaseId',
        'lastError' => 'lastError',
        'publishedResultAvailable' => 'publishedResultAvailable',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->chunkUpdate) {
            $this->chunkUpdate->validate();
        }
        if (null !== $this->lastError) {
            $this->lastError->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->chunkUpdate) {
            $res['chunkUpdate'] = null !== $this->chunkUpdate ? $this->chunkUpdate->toArray($noStream) : $this->chunkUpdate;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['knowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->lastError) {
            $res['lastError'] = null !== $this->lastError ? $this->lastError->toArray($noStream) : $this->lastError;
        }

        if (null !== $this->publishedResultAvailable) {
            $res['publishedResultAvailable'] = $this->publishedResultAvailable;
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

        if (isset($map['chunkUpdate'])) {
            $model->chunkUpdate = chunkUpdate::fromMap($map['chunkUpdate']);
        }

        if (isset($map['knowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['knowledgeBaseId'];
        }

        if (isset($map['lastError'])) {
            $model->lastError = lastError::fromMap($map['lastError']);
        }

        if (isset($map['publishedResultAvailable'])) {
            $model->publishedResultAvailable = $map['publishedResultAvailable'];
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
