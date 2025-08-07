<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class DeleteChunkShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $chunkIdsShrink;

    /**
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'chunkIdsShrink' => 'ChunkIds',
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIdsShrink) {
            $res['ChunkIds'] = $this->chunkIdsShrink;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
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
        if (isset($map['ChunkIds'])) {
            $model->chunkIdsShrink = $map['ChunkIds'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
