<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var string
     */
    public $measure;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $aggregates;

    /**
     * @var int
     */
    public $NValue;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $alias;
    protected $_name = [
        'measure'    => 'Measure',
        'value'      => 'Value',
        'aggregates' => 'Aggregates',
        'NValue'     => 'NValue',
        'operator'   => 'Operator',
        'alias'      => 'Alias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->measure) {
            $res['Measure'] = $this->measure;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->aggregates) {
            $res['Aggregates'] = $this->aggregates;
        }
        if (null !== $this->NValue) {
            $res['NValue'] = $this->NValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Measure'])) {
            $model->measure = $map['Measure'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Aggregates'])) {
            $model->aggregates = $map['Aggregates'];
        }
        if (isset($map['NValue'])) {
            $model->NValue = $map['NValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        return $model;
    }
}
