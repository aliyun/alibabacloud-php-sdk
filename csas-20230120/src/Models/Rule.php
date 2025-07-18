<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class Rule extends Model
{
    /**
     * @var string
     */
    public $combinator;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $ruleSubType;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var Rule[]
     */
    public $rules;

    /**
     * @var string[]
     */
    public $values;
    protected $_name = [
        'combinator' => 'Combinator',
        'id' => 'Id',
        'name' => 'Name',
        'operator' => 'Operator',
        'ruleSubType' => 'RuleSubType',
        'ruleType' => 'RuleType',
        'rules' => 'Rules',
        'values' => 'Values',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->combinator) {
            $res['Combinator'] = $this->combinator;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->ruleSubType) {
            $res['RuleSubType'] = $this->ruleSubType;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Combinator'])) {
            $model->combinator = $map['Combinator'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['RuleSubType'])) {
            $model->ruleSubType = $map['RuleSubType'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
