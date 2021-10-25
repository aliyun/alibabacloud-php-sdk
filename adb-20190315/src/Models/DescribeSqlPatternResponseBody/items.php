<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSqlPatternResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $avgStageCount;

    /**
     * @var string
     */
    public $maxCpuTime;

    /**
     * @var string
     */
    public $accessIP;

    /**
     * @var string
     */
    public $avgScanSize;

    /**
     * @var string
     */
    public $maxScanSize;

    /**
     * @var string
     */
    public $maxPeakMemory;

    /**
     * @var string
     */
    public $avgCpuTime;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $avgPeakMemory;

    /**
     * @var string
     */
    public $maxStageCount;

    /**
     * @var string
     */
    public $maxTaskCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $queryCount;

    /**
     * @var string
     */
    public $reportDate;

    /**
     * @var string
     */
    public $pattern;

    /**
     * @var string
     */
    public $avgTaskCount;
    protected $_name = [
        'avgStageCount' => 'AvgStageCount',
        'maxCpuTime'    => 'MaxCpuTime',
        'accessIP'      => 'AccessIP',
        'avgScanSize'   => 'AvgScanSize',
        'maxScanSize'   => 'MaxScanSize',
        'maxPeakMemory' => 'MaxPeakMemory',
        'avgCpuTime'    => 'AvgCpuTime',
        'user'          => 'User',
        'avgPeakMemory' => 'AvgPeakMemory',
        'maxStageCount' => 'MaxStageCount',
        'maxTaskCount'  => 'MaxTaskCount',
        'instanceName'  => 'InstanceName',
        'queryCount'    => 'QueryCount',
        'reportDate'    => 'ReportDate',
        'pattern'       => 'Pattern',
        'avgTaskCount'  => 'AvgTaskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgStageCount) {
            $res['AvgStageCount'] = $this->avgStageCount;
        }
        if (null !== $this->maxCpuTime) {
            $res['MaxCpuTime'] = $this->maxCpuTime;
        }
        if (null !== $this->accessIP) {
            $res['AccessIP'] = $this->accessIP;
        }
        if (null !== $this->avgScanSize) {
            $res['AvgScanSize'] = $this->avgScanSize;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->avgPeakMemory) {
            $res['AvgPeakMemory'] = $this->avgPeakMemory;
        }
        if (null !== $this->maxStageCount) {
            $res['MaxStageCount'] = $this->maxStageCount;
        }
        if (null !== $this->maxTaskCount) {
            $res['MaxTaskCount'] = $this->maxTaskCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->avgTaskCount) {
            $res['AvgTaskCount'] = $this->avgTaskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgStageCount'])) {
            $model->avgStageCount = $map['AvgStageCount'];
        }
        if (isset($map['MaxCpuTime'])) {
            $model->maxCpuTime = $map['MaxCpuTime'];
        }
        if (isset($map['AccessIP'])) {
            $model->accessIP = $map['AccessIP'];
        }
        if (isset($map['AvgScanSize'])) {
            $model->avgScanSize = $map['AvgScanSize'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['AvgPeakMemory'])) {
            $model->avgPeakMemory = $map['AvgPeakMemory'];
        }
        if (isset($map['MaxStageCount'])) {
            $model->maxStageCount = $map['MaxStageCount'];
        }
        if (isset($map['MaxTaskCount'])) {
            $model->maxTaskCount = $map['MaxTaskCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['AvgTaskCount'])) {
            $model->avgTaskCount = $map['AvgTaskCount'];
        }

        return $model;
    }
}
