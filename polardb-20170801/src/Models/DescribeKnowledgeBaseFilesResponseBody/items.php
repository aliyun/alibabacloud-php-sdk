<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseFilesResponseBody\items\shardingStrategyConfig;

class items extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var bool
     */
    public $inheritSpaceStrategy;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeSpaceId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $OSSPath;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var shardingStrategyConfig
     */
    public $shardingStrategyConfig;

    /**
     * @var string
     */
    public $sourceType;

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
    public $uploadTime;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileType' => 'FileType',
        'inheritSpaceStrategy' => 'InheritSpaceStrategy',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeSpaceId' => 'KnowledgeSpaceId',
        'metadata' => 'Metadata',
        'OSSPath' => 'OSSPath',
        'shardCount' => 'ShardCount',
        'shardingStrategyConfig' => 'ShardingStrategyConfig',
        'sourceType' => 'SourceType',
        'status' => 'Status',
        'updatedAt' => 'UpdatedAt',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->shardingStrategyConfig) {
            $this->shardingStrategyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->inheritSpaceStrategy) {
            $res['InheritSpaceStrategy'] = $this->inheritSpaceStrategy;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeSpaceId) {
            $res['KnowledgeSpaceId'] = $this->knowledgeSpaceId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->OSSPath) {
            $res['OSSPath'] = $this->OSSPath;
        }

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->shardingStrategyConfig) {
            $res['ShardingStrategyConfig'] = null !== $this->shardingStrategyConfig ? $this->shardingStrategyConfig->toArray($noStream) : $this->shardingStrategyConfig;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['InheritSpaceStrategy'])) {
            $model->inheritSpaceStrategy = $map['InheritSpaceStrategy'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeSpaceId'])) {
            $model->knowledgeSpaceId = $map['KnowledgeSpaceId'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['OSSPath'])) {
            $model->OSSPath = $map['OSSPath'];
        }

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['ShardingStrategyConfig'])) {
            $model->shardingStrategyConfig = shardingStrategyConfig::fromMap($map['ShardingStrategyConfig']);
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
