<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListJobMetricRequest extends Model
{
    /**
     * @description Grouping basis.
     *
     * > Available values: project, quota, type, status. Meanings:
     * >- project: Group and aggregate by project;
     * >- quota: Group and aggregate by quota;
     * >- type: Group and aggregate by job type;
     * >- status: Group and aggregate by job status.
     *
     * @example project
     *
     * @var string
     */
    public $group;

    /**
     * @description The name of observation metric.
     *
     * @example num
     *
     * @var string
     */
    public $metric;

    /**
     * @description The monitoring statistical period.Unit:Second(s).
     *
     * @example 3600
     *
     * @var int
     */
    public $period;

    /**
     * @description The name of MaxCompute projects (for filtering).
     *
     * @var string[]
     */
    public $project;

    /**
     * @description The nickname of computing Quota nickname used by the job (for filtering).
     *
     * @var string[]
     */
    public $quota;

    /**
     * @description The type of observation metric.
     *
     * @example total
     *
     * @var string
     */
    public $type;

    /**
     * @description The end time for the observation interval.
     *
     * This parameter is required.
     *
     * @example 1735536322
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start time for the observation interval.
     *
     * This parameter is required.
     *
     * @example 1735534322
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'group' => 'group',
        'metric' => 'metric',
        'period' => 'period',
        'project' => 'project',
        'quota' => 'quota',
        'type' => 'type',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['group'] = $this->group;
        }
        if (null !== $this->metric) {
            $res['metric'] = $this->metric;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group'])) {
            $model->group = $map['group'];
        }
        if (isset($map['metric'])) {
            $model->metric = $map['metric'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['project'])) {
            if (!empty($map['project'])) {
                $model->project = $map['project'];
            }
        }
        if (isset($map['quota'])) {
            if (!empty($map['quota'])) {
                $model->quota = $map['quota'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
