<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class UpdateChunkRequest extends Model
{
    /**
     * @var string
     */
    public $chunkId;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var bool
     */
    public $isDisplayedChunkContent;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'chunkId' => 'ChunkId',
        'dataId' => 'DataId',
        'isDisplayedChunkContent' => 'IsDisplayedChunkContent',
        'pipelineId' => 'PipelineId',
        'content' => 'content',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkId) {
            $res['ChunkId'] = $this->chunkId;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->isDisplayedChunkContent) {
            $res['IsDisplayedChunkContent'] = $this->isDisplayedChunkContent;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['ChunkId'])) {
            $model->chunkId = $map['ChunkId'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['IsDisplayedChunkContent'])) {
            $model->isDisplayedChunkContent = $map['IsDisplayedChunkContent'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
