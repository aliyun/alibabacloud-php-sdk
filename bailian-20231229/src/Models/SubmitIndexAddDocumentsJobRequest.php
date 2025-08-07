<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class SubmitIndexAddDocumentsJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $categoryIds;

    /**
     * @var string
     */
    public $chunkMode;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string[]
     */
    public $documentIds;

    /**
     * @var bool
     */
    public $enableHeaders;

    /**
     * @var string
     */
    public $indexId;

    /**
     * @var int
     */
    public $overlapSize;

    /**
     * @var string
     */
    public $separator;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'categoryIds' => 'CategoryIds',
        'chunkMode' => 'ChunkMode',
        'chunkSize' => 'ChunkSize',
        'documentIds' => 'DocumentIds',
        'enableHeaders' => 'EnableHeaders',
        'indexId' => 'IndexId',
        'overlapSize' => 'OverlapSize',
        'separator' => 'Separator',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        if (\is_array($this->documentIds)) {
            Model::validateArray($this->documentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIds) {
            if (\is_array($this->categoryIds)) {
                $res['CategoryIds'] = [];
                $n1 = 0;
                foreach ($this->categoryIds as $item1) {
                    $res['CategoryIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->chunkMode) {
            $res['ChunkMode'] = $this->chunkMode;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->documentIds) {
            if (\is_array($this->documentIds)) {
                $res['DocumentIds'] = [];
                $n1 = 0;
                foreach ($this->documentIds as $item1) {
                    $res['DocumentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableHeaders) {
            $res['EnableHeaders'] = $this->enableHeaders;
        }

        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        if (null !== $this->overlapSize) {
            $res['OverlapSize'] = $this->overlapSize;
        }

        if (null !== $this->separator) {
            $res['Separator'] = $this->separator;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['CategoryIds'])) {
            if (!empty($map['CategoryIds'])) {
                $model->categoryIds = [];
                $n1 = 0;
                foreach ($map['CategoryIds'] as $item1) {
                    $model->categoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ChunkMode'])) {
            $model->chunkMode = $map['ChunkMode'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = [];
                $n1 = 0;
                foreach ($map['DocumentIds'] as $item1) {
                    $model->documentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableHeaders'])) {
            $model->enableHeaders = $map['EnableHeaders'];
        }

        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        if (isset($map['OverlapSize'])) {
            $model->overlapSize = $map['OverlapSize'];
        }

        if (isset($map['Separator'])) {
            $model->separator = $map['Separator'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
