<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class KnowledgeBaseChunk extends Model
{
    /**
     * @var int
     */
    public $chunkSeq;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $documentId;

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
    public $sourceLocation;

    /**
     * @var string
     */
    public $titlePath;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'chunkSeq' => 'ChunkSeq',
        'chunkSize' => 'ChunkSize',
        'content' => 'Content',
        'createdAt' => 'CreatedAt',
        'documentId' => 'DocumentId',
        'enabled' => 'Enabled',
        'fileName' => 'FileName',
        'sourceLocation' => 'SourceLocation',
        'titlePath' => 'TitlePath',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkSeq) {
            $res['ChunkSeq'] = $this->chunkSeq;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->documentId) {
            $res['DocumentId'] = $this->documentId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->sourceLocation) {
            $res['SourceLocation'] = $this->sourceLocation;
        }

        if (null !== $this->titlePath) {
            $res['TitlePath'] = $this->titlePath;
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
        if (isset($map['ChunkSeq'])) {
            $model->chunkSeq = $map['ChunkSeq'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['DocumentId'])) {
            $model->documentId = $map['DocumentId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['SourceLocation'])) {
            $model->sourceLocation = $map['SourceLocation'];
        }

        if (isset($map['TitlePath'])) {
            $model->titlePath = $map['TitlePath'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
