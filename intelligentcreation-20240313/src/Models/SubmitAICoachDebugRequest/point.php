<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest\point\answerList;

class point extends Model
{
    /**
     * @var answerList[]
     */
    public $answerList;

    /**
     * @var string[]
     */
    public $knowledgeList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $questionSample;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'answerList' => 'answerList',
        'knowledgeList' => 'knowledgeList',
        'name' => 'name',
        'questionSample' => 'questionSample',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->answerList)) {
            Model::validateArray($this->answerList);
        }
        if (\is_array($this->knowledgeList)) {
            Model::validateArray($this->knowledgeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerList) {
            if (\is_array($this->answerList)) {
                $res['answerList'] = [];
                $n1 = 0;
                foreach ($this->answerList as $item1) {
                    $res['answerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->knowledgeList) {
            if (\is_array($this->knowledgeList)) {
                $res['knowledgeList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeList as $item1) {
                    $res['knowledgeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->questionSample) {
            $res['questionSample'] = $this->questionSample;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['answerList'])) {
            if (!empty($map['answerList'])) {
                $model->answerList = [];
                $n1 = 0;
                foreach ($map['answerList'] as $item1) {
                    $model->answerList[$n1] = answerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['knowledgeList'])) {
            if (!empty($map['knowledgeList'])) {
                $model->knowledgeList = [];
                $n1 = 0;
                foreach ($map['knowledgeList'] as $item1) {
                    $model->knowledgeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['questionSample'])) {
            $model->questionSample = $map['questionSample'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
