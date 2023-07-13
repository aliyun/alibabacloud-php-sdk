<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class alertConfigEscalationList extends Model
{
    /**
     * @description The ECS instances that are monitored. Valid values of N: 1 to 21.
     *
     * >  If the `TaskScope` parameter is set to `GROUP_SPEC_INSTANCE`, this parameter is required.
     * @example Value
     *
     * @var string
     */
    public $aggregate;

    /**
     * @description The character set that is used in the HTTP response.
     *
     * >  Valid value: UTF-8.
     * @example HttpStatus
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The method to trigger an alert. The alert can be triggered based on whether the specified alert rule is included in the response body. Valid values:
     *
     *   true: If the HTTP response body includes the alert rule, an alert is triggered.
     *   false: If the HTTP response does not include the alert rule, an alert is triggered.
     *
     * >  If the TaskType parameter is set to HTTP, this parameter is required. For more information about how to set the TaskType parameter, see [CreateHostAvailability](~~115317~~).
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description The parameters of the alert callback. The parameters are in the JSON format.
     *
     * @example 3
     *
     * @var int
     */
    public $times;

    /**
     * @description The callback URL.
     *
     * @example 3
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'aggregate'  => 'Aggregate',
        'metricName' => 'MetricName',
        'operator'   => 'Operator',
        'times'      => 'Times',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['Aggregate'] = $this->aggregate;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfigEscalationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregate'])) {
            $model->aggregate = $map['Aggregate'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
