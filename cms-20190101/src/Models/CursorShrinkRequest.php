<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CursorShrinkRequest extends Model
{
    /**
     * @example 1641645000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $matchersShrink;

    /**
     * @example cpu_idle
     *
     * @var string
     */
    public $metric;

    /**
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
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
