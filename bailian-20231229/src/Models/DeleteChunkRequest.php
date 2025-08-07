<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class DeleteChunkRequest extends Model
{
    /**
     * @var string[]
     */
    public $chunkIds;

    /**
     * @var string
     */
    public $pipelineId;
    protected $_name = [
        'chunkIds' => 'ChunkIds',
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
        if (\is_array($this->chunkIds)) {
            Model::validateArray($this->chunkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkIds) {
            if (\is_array($this->chunkIds)) {
                $res['ChunkIds'] = [];
                $n1 = 0;
                foreach ($this->chunkIds as $item1) {
                    $res['ChunkIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ChunkIds'])) {
                $model->chunkIds = [];
                $n1 = 0;
                foreach ($map['ChunkIds'] as $item1) {
                    $model->chunkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
