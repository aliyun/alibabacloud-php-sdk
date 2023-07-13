<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleListResponseBody\alarms\alarm\prometheus\annotations;
use AlibabaCloud\Tea\Model;

class prometheus extends Model
{
    /**
     * @description The annotations of the Prometheus alert rule. When a Prometheus alert is triggered, the system renders the annotated keys and values to help you understand the metrics and alert rule.
     *
     * >  This parameter is equivalent to the annotations parameter of open source Prometheus.
     * @var annotations
     */
    public $annotations;

    /**
     * @description The level of the alert. Valid values:
     *
     *   Critical
     *   Warn
     *   Info
     *
     * @example Critical
     *
     * @var string
     */
    public $level;

    /**
     * @description The PromQL query statement.
     *
     * >  The data obtained by using the PromQL query statement is the monitoring data. You must include the alert threshold in this statement.
     * @example CpuUsage{instanceId="xxxx"}[1m]>90
     *
     * @var string
     */
    public $promQL;

    /**
     * @description The number of consecutive triggers. If the number of times that the metric values meet the trigger conditions reaches the value of this parameter, CloudMonitor sends alert notifications.
     *
     * @example 3
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'annotations' => 'Annotations',
        'level'       => 'Level',
        'promQL'      => 'PromQL',
        'times'       => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = null !== $this->annotations ? $this->annotations->toMap() : null;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->promQL) {
            $res['PromQL'] = $this->promQL;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prometheus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Annotations'])) {
            $model->annotations = annotations::fromMap($map['Annotations']);
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['PromQL'])) {
            $model->promQL = $map['PromQL'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
