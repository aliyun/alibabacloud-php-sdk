<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\alertRule;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The aggregation logic of the metric data of the alert rule. Valid values:
     *
     *   `AVG`: calculates the average value for each minute
     *   `SUM`: calculates the total value for each minute
     *   `MAX`: calculates the maximum value for each minute
     *   `MIN`: calculates the minimum value for each minute
     *
     * @example AVG
     *
     * @var string
     */
    public $aggregates;

    /**
     * @description The displayed description of the alert metric.
     *
     * @example response time_ms
     *
     * @var string
     */
    public $alias;

    /**
     * @description The metric based on which alerts are triggered. For more information, see the "[Alert metrics](https://help.aliyun.com/document_detail/175825.html#h2-url-4)" section in this topic.
     *
     * @example appstat.jvm.SystemDiskFree
     *
     * @var string
     */
    public $measure;

    /**
     * @description The time range when data is requested. Unit: minutes. For example, a value of 5 indicates that the alert rule applies to the data in the last 5 minutes.
     *
     * @example 5
     *
     * @var int
     */
    public $NValue;

    /**
     * @description The operation logic of the condition. Valid values:
     *
     *   CURRENT_GTE: greater than or equal to
     *   CURRENT_LTE: less than or equal to
     *   PREVIOUS_UP: the increase percentage compared with the last period
     *   PREVIOUS_DOWN: the decrease percentage compared with the last period
     *   HOH_UP: the increase percentage compared with the last hour
     *   HOH_DOWN: the decrease percentage compared with the last hour
     *   DOD_UP: the increase percentage compared with the last day
     *   DOD_DOWN: the decrease percentage compared with the last day
     *
     * @example CURRENT_GTE
     *
     * @var string
     */
    public $operator;

    /**
     * @description The threshold of the condition.
     *
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
