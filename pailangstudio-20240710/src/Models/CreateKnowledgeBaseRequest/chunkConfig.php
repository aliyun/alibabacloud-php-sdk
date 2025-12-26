<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;

class chunkConfig extends Model
{
    /**
     * @var int
     */
    public $chunkDuration;

    /**
     * @var int
     */
    public $chunkOverlap;

    /**
     * @var int
     */
    public $chunkSize;

    /**
     * @var string
     */
    public $chunkStrategy;
    protected $_name = [
        'chunkDuration' => 'ChunkDuration',
        'chunkOverlap' => 'ChunkOverlap',
        'chunkSize' => 'ChunkSize',
        'chunkStrategy' => 'ChunkStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunkDuration) {
            $res['ChunkDuration'] = $this->chunkDuration;
        }

        if (null !== $this->chunkOverlap) {
            $res['ChunkOverlap'] = $this->chunkOverlap;
        }

        if (null !== $this->chunkSize) {
            $res['ChunkSize'] = $this->chunkSize;
        }

        if (null !== $this->chunkStrategy) {
            $res['ChunkStrategy'] = $this->chunkStrategy;
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
        if (isset($map['ChunkDuration'])) {
            $model->chunkDuration = $map['ChunkDuration'];
        }

        if (isset($map['ChunkOverlap'])) {
            $model->chunkOverlap = $map['ChunkOverlap'];
        }

        if (isset($map['ChunkSize'])) {
            $model->chunkSize = $map['ChunkSize'];
        }

        if (isset($map['ChunkStrategy'])) {
            $model->chunkStrategy = $map['ChunkStrategy'];
        }

        return $model;
    }
}
