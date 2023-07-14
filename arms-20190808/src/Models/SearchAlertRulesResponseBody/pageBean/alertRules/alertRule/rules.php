<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example AVG
     *
     * @var string
     */
    public $aggregates;

    /**
     * @var string
     */
    public $alias;

    /**
     * @example appstat.jvm.SystemDiskFree
     *
     * @var string
     */
    public $measure;

    /**
     * @example 5
     *
     * @var int
     */
    public $NValue;

    /**
     * @example CURRENT_GTE
     *
     * @var string
     */
    public $operator;

    /**
     * @example 30
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'aggregates' => 'Aggregates',
        'alias'      => 'Alias',
        'measure'    => 'Measure',
        'NValue'     => 'NValue',
        'operator'   => 'Operator',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rules
     */
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
