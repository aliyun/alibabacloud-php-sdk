<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\SearchLumaKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseSearchChunk;

class data extends Model
{
    /**
     * @var KnowledgeBaseSearchChunk[]
     */
    public $chunks;

    /**
     * @var int
     */
    public $timeSpent;
    protected $_name = [
        'chunks' => 'Chunks',
        'timeSpent' => 'TimeSpent',
    ];

    public function validate()
    {
        if (\is_array($this->chunks)) {
            Model::validateArray($this->chunks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chunks) {
            if (\is_array($this->chunks)) {
                $res['Chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['Chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeSpent) {
            $res['TimeSpent'] = $this->timeSpent;
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
        if (isset($map['Chunks'])) {
            if (!empty($map['Chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['Chunks'] as $item1) {
                    $model->chunks[$n1] = KnowledgeBaseSearchChunk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeSpent'])) {
            $model->timeSpent = $map['TimeSpent'];
        }

        return $model;
    }
}
