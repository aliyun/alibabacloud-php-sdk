<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class SubmitIndexAddDocumentsJobShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryIdsShrink;

    /**
     * @var string
     */
    public $chunkMode;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $documentIdsShrink;

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
        'categoryIdsShrink' => 'CategoryIds',
        'chunkMode' => 'ChunkMode',
        'chunkSize' => 'ChunkSize',
        'documentIdsShrink' => 'DocumentIds',
        'enableHeaders' => 'EnableHeaders',
        'indexId' => 'IndexId',
        'overlapSize' => 'OverlapSize',
        'separator' => 'Separator',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryIdsShrink) {
            $res['CategoryIds'] = $this->categoryIdsShrink;
        }

        if (null !== $this->chunkMode) {
            $res['ChunkMode'] = $this->chunkMode;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->documentIdsShrink) {
            $res['DocumentIds'] = $this->documentIdsShrink;
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
            $model->categoryIdsShrink = $map['CategoryIds'];
        }

        if (isset($map['ChunkMode'])) {
            $model->chunkMode = $map['ChunkMode'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['DocumentIds'])) {
            $model->documentIdsShrink = $map['DocumentIds'];
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
