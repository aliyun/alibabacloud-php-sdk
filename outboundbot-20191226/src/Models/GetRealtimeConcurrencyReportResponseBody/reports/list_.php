<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetRealtimeConcurrencyReportResponseBody\reports;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 85bf7efa-a07c-498a-850e-99a5849b8589
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxConcurrencyLimit;

    /**
     * @example 0
     *
     * @var int
     */
    public $minConcurrencyLimit;

    /**
     * @example 1
     *
     * @var int
     */
    public $occupiedConcurrencyCount;

    /**
     * @example 1743474900488
     *
     * @var int
     */
    public $reportDate;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'jobGroupId' => 'JobGroupId',
        'jobGroupName' => 'JobGroupName',
        'maxConcurrencyLimit' => 'MaxConcurrencyLimit',
        'minConcurrencyLimit' => 'MinConcurrencyLimit',
        'occupiedConcurrencyCount' => 'OccupiedConcurrencyCount',
        'reportDate' => 'ReportDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->maxConcurrencyLimit) {
            $res['MaxConcurrencyLimit'] = $this->maxConcurrencyLimit;
        }
        if (null !== $this->minConcurrencyLimit) {
            $res['MinConcurrencyLimit'] = $this->minConcurrencyLimit;
        }
        if (null !== $this->occupiedConcurrencyCount) {
            $res['OccupiedConcurrencyCount'] = $this->occupiedConcurrencyCount;
        }
        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['MaxConcurrencyLimit'])) {
            $model->maxConcurrencyLimit = $map['MaxConcurrencyLimit'];
        }
        if (isset($map['MinConcurrencyLimit'])) {
            $model->minConcurrencyLimit = $map['MinConcurrencyLimit'];
        }
        if (isset($map['OccupiedConcurrencyCount'])) {
            $model->occupiedConcurrencyCount = $map['OccupiedConcurrencyCount'];
        }
        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }

        return $model;
    }
}
