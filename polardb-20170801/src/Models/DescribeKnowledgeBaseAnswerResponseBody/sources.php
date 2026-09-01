<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeKnowledgeBaseAnswerResponseBody;

use AlibabaCloud\Dara\Model;

class sources extends Model
{
    /**
     * @var mixed[]
     */
    public $chunkMetadata;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var int[]
     */
    public $pageNumbers;

    /**
     * @var string
     */
    public $shardContent;

    /**
     * @var int
     */
    public $shardIndex;

    /**
     * @var float
     */
    public $similarityScore;

    /**
     * @var int
     */
    public $sourceId;
    protected $_name = [
        'chunkMetadata' => 'ChunkMetadata',
        'fileId' => 'FileId',
        'fileName' => 'FileName',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'metadata' => 'Metadata',
        'pageNumbers' => 'PageNumbers',
        'shardContent' => 'ShardContent',
        'shardIndex' => 'ShardIndex',
        'similarityScore' => 'SimilarityScore',
        'sourceId' => 'SourceId',
    ];

    public function validate()
    {
        if (\is_array($this->chunkMetadata)) {
            Model::validateArray($this->chunkMetadata);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->pageNumbers)) {
            Model::validateArray($this->pageNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkMetadata) {
            if (\is_array($this->chunkMetadata)) {
                $res['ChunkMetadata'] = [];
                foreach ($this->chunkMetadata as $key1 => $value1) {
                    $res['ChunkMetadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pageNumbers) {
            if (\is_array($this->pageNumbers)) {
                $res['PageNumbers'] = [];
                $n1 = 0;
                foreach ($this->pageNumbers as $item1) {
                    $res['PageNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shardContent) {
            $res['ShardContent'] = $this->shardContent;
        }

        if (null !== $this->shardIndex) {
            $res['ShardIndex'] = $this->shardIndex;
        }

        if (null !== $this->similarityScore) {
            $res['SimilarityScore'] = $this->similarityScore;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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
        if (isset($map['ChunkMetadata'])) {
            if (!empty($map['ChunkMetadata'])) {
                $model->chunkMetadata = [];
                foreach ($map['ChunkMetadata'] as $key1 => $value1) {
                    $model->chunkMetadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['PageNumbers'])) {
            if (!empty($map['PageNumbers'])) {
                $model->pageNumbers = [];
                $n1 = 0;
                foreach ($map['PageNumbers'] as $item1) {
                    $model->pageNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ShardContent'])) {
            $model->shardContent = $map['ShardContent'];
        }

        if (isset($map['ShardIndex'])) {
            $model->shardIndex = $map['ShardIndex'];
        }

        if (isset($map['SimilarityScore'])) {
            $model->similarityScore = $map['SimilarityScore'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
