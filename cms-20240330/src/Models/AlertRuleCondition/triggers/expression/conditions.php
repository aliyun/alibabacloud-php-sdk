<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\triggers\expression;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $expressionType;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'expressionType' => 'expressionType',
        'operator' => 'operator',
        'queryName' => 'queryName',
        'threshold' => 'threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressionType) {
            $res['expressionType'] = $this->expressionType;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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
        if (isset($map['expressionType'])) {
            $model->expressionType = $map['expressionType'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}
