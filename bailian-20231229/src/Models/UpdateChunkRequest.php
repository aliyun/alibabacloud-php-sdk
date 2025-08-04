<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class UpdateChunkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example llm-5ip55o1zrzxx_09fe52x_table_033b551e10024029992e79767b151fxx_10024xx_0
     *
     * @var string
     */
    public $chunkId;

    /**
     * @description This parameter is required.
     *
     * @example doc_c134aa2073204a5d936d870bf960f56axxxxxxxx
     *
     * @var string
     */
    public $dataId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $isDisplayedChunkContent;

    /**
     * @description This parameter is required.
     *
     * @example 79c0alxxxx
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateChunkRequest
     */
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
