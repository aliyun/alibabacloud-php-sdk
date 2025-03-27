<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList\answerValues;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList\parameters;

class answerList extends Model
{
    /**
     * @var answerValues[]
     */
    public $answerValues;

    /**
     * @var bool
     */
    public $enabledKeyword;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @var string
     */
    public $operators;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'answerValues' => 'answerValues',
        'enabledKeyword' => 'enabledKeyword',
        'name' => 'name',
        'nameList' => 'nameList',
        'operators' => 'operators',
        'parameters' => 'parameters',
        'type' => 'type',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (\is_array($this->answerValues)) {
            Model::validateArray($this->answerValues);
        }
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerValues) {
            if (\is_array($this->answerValues)) {
                $res['answerValues'] = [];
                $n1 = 0;
                foreach ($this->answerValues as $item1) {
                    $res['answerValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enabledKeyword) {
            $res['enabledKeyword'] = $this->enabledKeyword;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nameList) {
            if (\is_array($this->nameList)) {
                $res['nameList'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['nameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operators) {
            $res['operators'] = $this->operators;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['answerValues'])) {
            if (!empty($map['answerValues'])) {
                $model->answerValues = [];
                $n1 = 0;
                foreach ($map['answerValues'] as $item1) {
                    $model->answerValues[$n1++] = answerValues::fromMap($item1);
                }
            }
        }

        if (isset($map['enabledKeyword'])) {
            $model->enabledKeyword = $map['enabledKeyword'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['nameList'] as $item1) {
                    $model->nameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['operators'])) {
            $model->operators = $map['operators'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
