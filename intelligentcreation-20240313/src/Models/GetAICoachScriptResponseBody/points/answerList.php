<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList\parameters;
use AlibabaCloud\Tea\Model;

class answerList extends Model
{
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
     * @example normalKnowledge
     *
     * @var string
     */
    public $type;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'name'       => 'name',
        'nameList'   => 'nameList',
        'operators'  => 'operators',
        'parameters' => 'parameters',
        'type'       => 'type',
        'weight'     => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameList) {
            $res['nameList'] = $this->nameList;
        }
        if (null !== $this->operators) {
            $res['operators'] = $this->operators;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['parameters'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return answerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameList'])) {
            if (!empty($map['nameList'])) {
                $model->nameList = $map['nameList'];
            }
        }
        if (isset($map['operators'])) {
            $model->operators = $map['operators'];
        }
        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
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
