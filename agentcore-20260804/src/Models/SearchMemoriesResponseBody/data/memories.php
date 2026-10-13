<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchMemoriesResponseBody\data\memories\memory;

class memories extends Model
{
    /**
     * @var memory
     */
    public $memory;

    /**
     * @var float
     */
    public $score;

    /**
     * @var float
     */
    public $similarity;
    protected $_name = [
        'memory' => 'memory',
        'score' => 'score',
        'similarity' => 'similarity',
    ];

    public function validate()
    {
        if (null !== $this->memory) {
            $this->memory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memory) {
            $res['memory'] = null !== $this->memory ? $this->memory->toArray($noStream) : $this->memory;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->similarity) {
            $res['similarity'] = $this->similarity;
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
        if (isset($map['memory'])) {
            $model->memory = memory::fromMap($map['memory']);
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['similarity'])) {
            $model->similarity = $map['similarity'];
        }

        return $model;
    }
}
