<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\aggregates;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\groupbys;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutLogMonitorRequest\valueFilter;
use AlibabaCloud\Tea\Model;

class PutLogMonitorRequest extends Model
{
    /**
     * @var aggregates[]
     */
    public $aggregates;

    /**
     * @description The ID of the application group.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var groupbys[]
     */
    public $groupbys;

    /**
     * @description The ID of the log monitoring metric.
     *
     * @example 16****
     *
     * @var string
     */
    public $logId;

    /**
     * @description The extended field. The extended field allows you to perform basic operations on the aggregation results.
     *
     * For example, if you have calculated TotalNumber and 5XXNumber by aggregating the data. TotalNumber indicates the total number of HTTP requests, and 5XXNumber indicates the number of HTTP requests whose status code is greater than 499. You can calculate the server error rate by adding the following formula to the extended field: 5XXNumber/TotalNumber\*100.
     *
     * JSON format: {"extend":{"errorPercent":"5XXNumber/TotalNumber\*100"}}. Description:
     *
     *   extend: required.
     *   errorPercent: the alias of the field generated in the calculation result. You can specify the alias as needed.
     *   5XXNumber/TotalNumber\*100: the calculation expression.
     *
     * @example {"extend":{"errorPercent":"5XXNumber/TotalNumber*100"}}
     *
     * @var string
     */
    public $metricExpress;

    /**
     * @description The name of the metric. For more information about the metrics for cloud services, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the Log Service Logstore.
     *
     * @example test-logstore
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @description The name of the Log Service project.
     *
     * @example test-project
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description The region in which the Log Service project resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegionId;

    /**
     * @description The size of the tumbling window for calculation. Unit: seconds. CloudMonitor performs aggregation for each tumbling window.
     *
     * @example 60,300
     *
     * @var string
     */
    public $tumblingwindows;

    /**
     * @description The unit.
     *
     * @example Percent
     *
     * @var string
     */
    public $unit;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @description The logical operator that is used between log filter conditions. Valid values:
     *
     *   and
     *   or
     *
     * >  The ValueFilterRelation and `ValueFilter.N.Key` parameters must be used in pair.
     * @example and
     *
     * @var string
     */
    public $valueFilterRelation;
    protected $_name = [
        'aggregates'          => 'Aggregates',
        'groupId'             => 'GroupId',
        'groupbys'            => 'Groupbys',
        'logId'               => 'LogId',
        'metricExpress'       => 'MetricExpress',
        'metricName'          => 'MetricName',
        'regionId'            => 'RegionId',
        'slsLogstore'         => 'SlsLogstore',
        'slsProject'          => 'SlsProject',
        'slsRegionId'         => 'SlsRegionId',
        'tumblingwindows'     => 'Tumblingwindows',
        'unit'                => 'Unit',
        'valueFilter'         => 'ValueFilter',
        'valueFilterRelation' => 'ValueFilterRelation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregates) {
            $res['Aggregates'] = [];
            if (null !== $this->aggregates && \is_array($this->aggregates)) {
                $n = 0;
                foreach ($this->aggregates as $item) {
                    $res['Aggregates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupbys) {
            $res['Groupbys'] = [];
            if (null !== $this->groupbys && \is_array($this->groupbys)) {
                $n = 0;
                foreach ($this->groupbys as $item) {
                    $res['Groupbys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->metricExpress) {
            $res['MetricExpress'] = $this->metricExpress;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->tumblingwindows) {
            $res['Tumblingwindows'] = $this->tumblingwindows;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->valueFilter) {
            $res['ValueFilter'] = [];
            if (null !== $this->valueFilter && \is_array($this->valueFilter)) {
                $n = 0;
                foreach ($this->valueFilter as $item) {
                    $res['ValueFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLogMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregates'])) {
            if (!empty($map['Aggregates'])) {
                $model->aggregates = [];
                $n                 = 0;
                foreach ($map['Aggregates'] as $item) {
                    $model->aggregates[$n++] = null !== $item ? aggregates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Groupbys'])) {
            if (!empty($map['Groupbys'])) {
                $model->groupbys = [];
                $n               = 0;
                foreach ($map['Groupbys'] as $item) {
                    $model->groupbys[$n++] = null !== $item ? groupbys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['MetricExpress'])) {
            $model->metricExpress = $map['MetricExpress'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['Tumblingwindows'])) {
            $model->tumblingwindows = $map['Tumblingwindows'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n                  = 0;
                foreach ($map['ValueFilter'] as $item) {
                    $model->valueFilter[$n++] = null !== $item ? valueFilter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }

        return $model;
    }
}
