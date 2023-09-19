<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CursorShrinkRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * >
     *
     *   This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. For example, 2023-01-01T00:00:00Z indicates January 1, 2023, 00:00:00 UTC.
     *
     *   If you do not set the end time, the end time is infinite. You can leave this parameter empty in real-time export scenarios.
     *   In CloudMonitor, the TTL of monitoring data varies with the time granularity. Specify a proper time interval based on the TTL corresponding to the value of the `Period` parameter.
     *
     * @example 1641645000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The dimension information of the metric.
     *
     * @var string
     */
    public $matchersShrink;

    /**
     * @description The metric that is used to monitor the cloud service.
     *
     * For more information about the metrics of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example cpu_idle
     *
     * @var string
     */
    public $metric;

    /**
     * @description The namespace of the cloud service.
     *
     * For more information about the namespaces of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The time interval based on which the metric value is measured.
     *
     * >  Generally, the time interval is 60 seconds. For more information about specific values, see the `Period` parameter in [Appendix 1: Metrics](~~163515~~).
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @description The beginning of the time range to query.
     *
     * >  In CloudMonitor, the TTL of monitoring data varies with the time granularity. Specify a proper time interval based on the TTL corresponding to the value of the `Period` parameter.
     * @example 1641627000000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'        => 'EndTime',
        'matchersShrink' => 'Matchers',
        'metric'         => 'Metric',
        'namespace'      => 'Namespace',
        'period'         => 'Period',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->matchersShrink) {
            $res['Matchers'] = $this->matchersShrink;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CursorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Matchers'])) {
            $model->matchersShrink = $map['Matchers'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
