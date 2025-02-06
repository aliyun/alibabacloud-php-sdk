<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class RulesInfo extends Model
{
    /**
     * @var ConditionBasicInfo[]
     */
    public $conditions;
    /**
     * @var int
     */
    public $count;
    /**
     * @var RuleTestDialogue[]
     */
    public $dialogues;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var RuleInfo[]
     */
    public $rules;
    protected $_name = [
        'conditions' => 'Conditions',
        'count'      => 'Count',
        'dialogues'  => 'Dialogues',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'rules'      => 'Rules',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->dialogues)) {
            Model::validateArray($this->dialogues);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1                = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->dialogues) {
            if (\is_array($this->dialogues)) {
                $res['Dialogues'] = [];
                $n1               = 0;
                foreach ($this->dialogues as $item1) {
                    $res['Dialogues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1           = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1                = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1++] = ConditionBasicInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Dialogues'])) {
            if (!empty($map['Dialogues'])) {
                $model->dialogues = [];
                $n1               = 0;
                foreach ($map['Dialogues'] as $item1) {
                    $model->dialogues[$n1++] = RuleTestDialogue::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1           = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1++] = RuleInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
