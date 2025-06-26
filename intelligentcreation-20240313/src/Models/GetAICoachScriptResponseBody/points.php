<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList;

class points extends Model
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
    public $pointId;

    /**
     * @var string
     */
    public $questionDescription;

    /**
     * @var int
     */
    public $sortNo;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'answerList' => 'answerList',
        'knowledgeList' => 'knowledgeList',
        'name' => 'name',
        'pointId' => 'pointId',
        'questionDescription' => 'questionDescription',
        'sortNo' => 'sortNo',
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

        if (null !== $this->pointId) {
            $res['pointId'] = $this->pointId;
        }

        if (null !== $this->questionDescription) {
            $res['questionDescription'] = $this->questionDescription;
        }

        if (null !== $this->sortNo) {
            $res['sortNo'] = $this->sortNo;
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

        if (isset($map['pointId'])) {
            $model->pointId = $map['pointId'];
        }

        if (isset($map['questionDescription'])) {
            $model->questionDescription = $map['questionDescription'];
        }

        if (isset($map['sortNo'])) {
            $model->sortNo = $map['sortNo'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
