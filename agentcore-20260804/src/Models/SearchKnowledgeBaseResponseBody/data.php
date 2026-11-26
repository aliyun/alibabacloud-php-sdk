<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\SearchKnowledgeBaseResponseBody\data\chunks;

class data extends Model
{
    /**
     * @var chunks[]
     */
    public $chunks;

    /**
     * @var string
     */
    public $scoreType;

    /**
     * @var int
     */
    public $timeSpent;
    protected $_name = [
        'chunks' => 'chunks',
        'scoreType' => 'scoreType',
        'timeSpent' => 'timeSpent',
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
                $res['chunks'] = [];
                $n1 = 0;
                foreach ($this->chunks as $item1) {
                    $res['chunks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scoreType) {
            $res['scoreType'] = $this->scoreType;
        }

        if (null !== $this->timeSpent) {
            $res['timeSpent'] = $this->timeSpent;
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
        if (isset($map['chunks'])) {
            if (!empty($map['chunks'])) {
                $model->chunks = [];
                $n1 = 0;
                foreach ($map['chunks'] as $item1) {
                    $model->chunks[$n1] = chunks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scoreType'])) {
            $model->scoreType = $map['scoreType'];
        }

        if (isset($map['timeSpent'])) {
            $model->timeSpent = $map['timeSpent'];
        }

        return $model;
    }
}
