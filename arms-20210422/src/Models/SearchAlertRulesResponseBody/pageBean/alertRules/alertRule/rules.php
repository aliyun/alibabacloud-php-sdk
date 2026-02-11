<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $aggregates;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $measure;

    /**
     * @var int
     */
    public $NValue;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'aggregates' => 'Aggregates',
        'alias' => 'Alias',
        'measure' => 'Measure',
        'NValue' => 'NValue',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregates) {
            $res['Aggregates'] = $this->aggregates;
        }

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->measure) {
            $res['Measure'] = $this->measure;
        }

        if (null !== $this->NValue) {
            $res['NValue'] = $this->NValue;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Aggregates'])) {
            $model->aggregates = $map['Aggregates'];
        }

        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['Measure'])) {
            $model->measure = $map['Measure'];
        }

        if (isset($map['NValue'])) {
            $model->NValue = $map['NValue'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
