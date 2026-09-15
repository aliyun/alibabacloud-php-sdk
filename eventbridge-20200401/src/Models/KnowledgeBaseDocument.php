<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseDocument\chunkConfiguration;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseDocument\metadata;

class KnowledgeBaseDocument extends Model
{
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
    public $createdAt;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var metadata[]
     */
    public $metadata;

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
    protected $_name = [
        'chunkConfiguration' => 'ChunkConfiguration',
        'chunkCount' => 'ChunkCount',
        'createdAt' => 'CreatedAt',
        'documentId' => 'DocumentId',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'metadata' => 'Metadata',
        'sourceModifiedTime' => 'SourceModifiedTime',
        'sourceType' => 'SourceType',
        'sourceUri' => 'SourceUri',
        'status' => 'Status',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        if (null !== $this->chunkConfiguration) {
            $this->chunkConfiguration->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkConfiguration) {
            $res['ChunkConfiguration'] = null !== $this->chunkConfiguration ? $this->chunkConfiguration->toArray($noStream) : $this->chunkConfiguration;
        }

        if (null !== $this->chunkCount) {
            $res['ChunkCount'] = $this->chunkCount;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                $n1 = 0;
                foreach ($this->metadata as $item1) {
                    $res['Metadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceModifiedTime) {
            $res['SourceModifiedTime'] = $this->sourceModifiedTime;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['ChunkConfiguration'])) {
            $model->chunkConfiguration = chunkConfiguration::fromMap($map['ChunkConfiguration']);
        }

        if (isset($map['ChunkCount'])) {
            $model->chunkCount = $map['ChunkCount'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                $n1 = 0;
                foreach ($map['Metadata'] as $item1) {
                    $model->metadata[$n1] = metadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceModifiedTime'])) {
            $model->sourceModifiedTime = $map['SourceModifiedTime'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
