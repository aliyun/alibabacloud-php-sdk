<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\GetRealtimeConcurrencyReportResponseBody\reports;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var int
     */
    public $maxConcurrencyLimit;

    /**
     * @var int
     */
    public $minConcurrencyLimit;

    /**
     * @var int
     */
    public $occupiedConcurrencyCount;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
