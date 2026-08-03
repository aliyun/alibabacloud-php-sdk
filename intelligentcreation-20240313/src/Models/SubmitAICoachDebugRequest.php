<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest\deductionRule;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest\dialogueList;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest\expressiveness;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitAICoachDebugRequest\point;

class SubmitAICoachDebugRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var int
     */
    public $dataType;

    /**
     * @var deductionRule
     */
    public $deductionRule;

    /**
     * @var dialogueList[]
     */
    public $dialogueList;

    /**
     * @var expressiveness
     */
    public $expressiveness;

    /**
     * @var point
     */
    public $point;
    protected $_name = [
        'dataId' => 'dataId',
        'dataType' => 'dataType',
        'deductionRule' => 'deductionRule',
        'dialogueList' => 'dialogueList',
        'expressiveness' => 'expressiveness',
        'point' => 'point',
    ];

    public function validate()
    {
        if (null !== $this->deductionRule) {
            $this->deductionRule->validate();
        }
        if (\is_array($this->dialogueList)) {
            Model::validateArray($this->dialogueList);
        }
        if (null !== $this->expressiveness) {
            $this->expressiveness->validate();
        }
        if (null !== $this->point) {
            $this->point->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->deductionRule) {
            $res['deductionRule'] = null !== $this->deductionRule ? $this->deductionRule->toArray($noStream) : $this->deductionRule;
        }

        if (null !== $this->dialogueList) {
            if (\is_array($this->dialogueList)) {
                $res['dialogueList'] = [];
                $n1 = 0;
                foreach ($this->dialogueList as $item1) {
                    $res['dialogueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expressiveness) {
            $res['expressiveness'] = null !== $this->expressiveness ? $this->expressiveness->toArray($noStream) : $this->expressiveness;
        }

        if (null !== $this->point) {
            $res['point'] = null !== $this->point ? $this->point->toArray($noStream) : $this->point;
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
        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['deductionRule'])) {
            $model->deductionRule = deductionRule::fromMap($map['deductionRule']);
        }

        if (isset($map['dialogueList'])) {
            if (!empty($map['dialogueList'])) {
                $model->dialogueList = [];
                $n1 = 0;
                foreach ($map['dialogueList'] as $item1) {
                    $model->dialogueList[$n1] = dialogueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['expressiveness'])) {
            $model->expressiveness = expressiveness::fromMap($map['expressiveness']);
        }

        if (isset($map['point'])) {
            $model->point = point::fromMap($map['point']);
        }

        return $model;
    }
}
