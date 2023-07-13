<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor\aggregates;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorAttributeResponseBody\logMonitor\valueFilter;
use AlibabaCloud\Tea\Model;

class logMonitor extends Model
{
    /**
     * @description The maximum value.
     *
     * @var aggregates[]
     */
    public $aggregates;

    /**
     * @description The name of the Log Service project.
     *
     * @example 1547431398000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The ID returned by Log Service.
     *
     * @example 12345
     *
     * @var int
     */
    public $groupId;

    /**
     * @var string[]
     */
    public $groupbys;

    /**
     * @description The extended field. The extended field allows you to perform basic operations on the aggregation results.
     *
     * Assume that you have calculated TotalNumber and 5XXNumber by aggregating the data. TotalNumber indicates the total number of HTTP requests, and 5XXNumber indicates the number of HTTP requests whose status code is greater than 499. You can calculate the server error rate by adding the following formula to the extended field: 5XXNumber/TotalNumber\*100.
     * @example 1234
     *
     * @var int
     */
    public $logId;

    /**
     * @description The ID of the region where the Log Service Logstore resides.
     *
     * @example {"extend":{"errorPercent":"5XXNumber/TotalNumber*100"}}
     *
     * @var string
     */
    public $metricExpress;

    /**
     * @description The ID of the application group.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The name of the log monitoring metric. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example test-logstore
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @description The aggregate functions.
     *
     * @example test-project
     *
     * @var string
     */
    public $slsProject;

    /**
     * @description The time when the log monitoring metric was created.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $slsRegionId;

    /**
     * @description The dimension based on which the data is grouped. This parameter is equivalent to the GROUP BY clause in SQL statements. If no dimension is specified, all data is aggregated based on the aggregate function.
     *
     * @var string[]
     */
    public $tumblingwindows;

    /**
     * @description The name of the log field used for matching in the filter condition.
     *
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @description The name of the Log Service Logstore.
     *
     * @example and
     *
     * @var string
     */
    public $valueFilterRelation;
    protected $_name = [
        'aggregates'          => 'Aggregates',
        'gmtCreate'           => 'GmtCreate',
        'groupId'             => 'GroupId',
        'groupbys'            => 'Groupbys',
        'logId'               => 'LogId',
        'metricExpress'       => 'MetricExpress',
        'metricName'          => 'MetricName',
        'slsLogstore'         => 'SlsLogstore',
        'slsProject'          => 'SlsProject',
        'slsRegionId'         => 'SlsRegionId',
        'tumblingwindows'     => 'Tumblingwindows',
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
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupbys) {
            $res['Groupbys'] = $this->groupbys;
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
     * @return logMonitor
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Groupbys'])) {
            if (!empty($map['Groupbys'])) {
                $model->groupbys = $map['Groupbys'];
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
            if (!empty($map['Tumblingwindows'])) {
                $model->tumblingwindows = $map['Tumblingwindows'];
            }
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
