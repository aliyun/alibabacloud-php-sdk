<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentSplitRequest;

use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $computeType;

    /**
     * @var int
     */
    public $maxChunkSize;

    /**
     * @var bool
     */
    public $needSentence;
    protected $_name = [
        'computeType'  => 'compute_type',
        'maxChunkSize' => 'max_chunk_size',
        'needSentence' => 'need_sentence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeType) {
            $res['compute_type'] = $this->computeType;
        }
        if (null !== $this->maxChunkSize) {
            $res['max_chunk_size'] = $this->maxChunkSize;
        }
        if (null !== $this->needSentence) {
            $res['need_sentence'] = $this->needSentence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['compute_type'])) {
            $model->computeType = $map['compute_type'];
        }
        if (isset($map['max_chunk_size'])) {
            $model->maxChunkSize = $map['max_chunk_size'];
        }
        if (isset($map['need_sentence'])) {
            $model->needSentence = $map['need_sentence'];
        }

        return $model;
    }
}
