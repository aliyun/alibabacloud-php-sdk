<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryStoreResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $extractInstructions;

    /**
     * @var string
     */
    public $memoryStoreId;

    /**
     * @var string
     */
    public $memoryStoreName;

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
        'createdAt' => 'createdAt',
        'description' => 'description',
        'extractInstructions' => 'extractInstructions',
        'memoryStoreId' => 'memoryStoreId',
        'memoryStoreName' => 'memoryStoreName',
        'status' => 'status',
        'updatedAt' => 'updatedAt',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->extractInstructions) {
            $res['extractInstructions'] = $this->extractInstructions;
        }

        if (null !== $this->memoryStoreId) {
            $res['memoryStoreId'] = $this->memoryStoreId;
        }

        if (null !== $this->memoryStoreName) {
            $res['memoryStoreName'] = $this->memoryStoreName;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['extractInstructions'])) {
            $model->extractInstructions = $map['extractInstructions'];
        }

        if (isset($map['memoryStoreId'])) {
            $model->memoryStoreId = $map['memoryStoreId'];
        }

        if (isset($map['memoryStoreName'])) {
            $model->memoryStoreName = $map['memoryStoreName'];
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
