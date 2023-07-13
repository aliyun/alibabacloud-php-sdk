<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody\logMonitorList\valueFilter;
use AlibabaCloud\Tea\Model;

class logMonitorList extends Model
{
    /**
     * @description The name of the Log Service project.
     *
     * @example 1577766395000
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
     * @description The ID of the region where the Log Service Logstore resides.
     *
     * @example 12345
     *
     * @var int
     */
    public $logId;

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
     * @example testSlS****
     *
     * @var string
     */
    public $slsLogstore;

    /**
     * @description The condition that is used to filter logs. The ValueFilter and ValueFilterRelation parameters are used in pair. The filter condition is equivalent to the WHERE clause in SQL statements.
     *
     * If no filter condition is specified, all logs are processed. Assume that logs contain the Level field, which may be set to Error. If you need to calculate the number of times that logs of the Error level appear every minute, you can set the filter condition to Level=Error and count the number of logs that meet this condition.
     * @example sls-project-test****
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
        'gmtCreate'           => 'GmtCreate',
        'groupId'             => 'GroupId',
        'logId'               => 'LogId',
        'metricName'          => 'MetricName',
        'slsLogstore'         => 'SlsLogstore',
        'slsProject'          => 'SlsProject',
        'slsRegionId'         => 'SlsRegionId',
        'valueFilter'         => 'ValueFilter',
        'valueFilterRelation' => 'ValueFilterRelation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
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
     * @return logMonitorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
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
