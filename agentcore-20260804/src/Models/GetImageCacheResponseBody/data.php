<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetImageCacheResponseBody\data\error;

class data extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var int
     */
    public $agentCount;

    /**
     * @var int
     */
    public $cacheSizeBytes;

    /**
     * @var bool
     */
    public $canDelete;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $deleteBlockReason;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $registry;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'agentCount' => 'agentCount',
        'cacheSizeBytes' => 'cacheSizeBytes',
        'canDelete' => 'canDelete',
        'createdAt' => 'createdAt',
        'deleteBlockReason' => 'deleteBlockReason',
        'digest' => 'digest',
        'error' => 'error',
        'imageId' => 'imageId',
        'registry' => 'registry',
        'repository' => 'repository',
        'status' => 'status',
        'tag' => 'tag',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->agentCount) {
            $res['agentCount'] = $this->agentCount;
        }

        if (null !== $this->cacheSizeBytes) {
            $res['cacheSizeBytes'] = $this->cacheSizeBytes;
        }

        if (null !== $this->canDelete) {
            $res['canDelete'] = $this->canDelete;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->deleteBlockReason) {
            $res['deleteBlockReason'] = $this->deleteBlockReason;
        }

        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->registry) {
            $res['registry'] = $this->registry;
        }

        if (null !== $this->repository) {
            $res['repository'] = $this->repository;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

        if (isset($map['agentCount'])) {
            $model->agentCount = $map['agentCount'];
        }

        if (isset($map['cacheSizeBytes'])) {
            $model->cacheSizeBytes = $map['cacheSizeBytes'];
        }

        if (isset($map['canDelete'])) {
            $model->canDelete = $map['canDelete'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['deleteBlockReason'])) {
            $model->deleteBlockReason = $map['deleteBlockReason'];
        }

        if (isset($map['digest'])) {
            $model->digest = $map['digest'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['registry'])) {
            $model->registry = $map['registry'];
        }

        if (isset($map['repository'])) {
            $model->repository = $map['repository'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
