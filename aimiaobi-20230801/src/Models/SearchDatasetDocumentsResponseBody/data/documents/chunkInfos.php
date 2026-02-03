<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SearchDatasetDocumentsResponseBody\data\documents;

use AlibabaCloud\Dara\Model;

class chunkInfos extends Model
{
    /**
     * @var string
     */
    public $chunk;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'chunk' => 'Chunk',
        'score' => 'Score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunk) {
            $res['Chunk'] = $this->chunk;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Chunk'])) {
            $model->chunk = $map['Chunk'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
