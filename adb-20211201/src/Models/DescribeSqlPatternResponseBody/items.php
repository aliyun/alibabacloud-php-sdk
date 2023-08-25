<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSqlPatternResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 100.104.xx.xx
     *
     * @var string
     */
    public $accessIP;

    /**
     * @example 1.0625
     *
     * @var string
     */
    public $avgCpuTime;

    /**
     * @example 240048
     *
     * @var string
     */
    public $avgPeakMemory;

    /**
     * @example 244
     *
     * @var string
     */
    public $avgScanSize;

    /**
     * @example 2
     *
     * @var string
     */
    public $avgStageCount;

    /**
     * @example 2
     *
     * @var string
     */
    public $avgTaskCount;

    /**
     * @example amv-bp1ej1nq9n6****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 17
     *
     * @var string
     */
    public $maxCpuTime;

    /**
     * @example 480096
     *
     * @var string
     */
    public $maxPeakMemory;

    /**
     * @example 1024
     *
     * @var string
     */
    public $maxScanSize;

    /**
     * @example 2
     *
     * @var string
     */
    public $maxStageCount;

    /**
     * @example 2
     *
     * @var string
     */
    public $maxTaskCount;

    /**
     * @description SQL Pattern。
     *
     * @example SELECT table_name, table_schema AS schema_name, create_time, create_time AS last_ddl_time, table_comment AS description , ceil((data_length + index_length) / ? / ?) AS store_capacity , data_length AS data_bytes, index_length AS index_bytes, table_collation AS collation, auto_increment, table_rows AS num_rows , engine FROM information_schema.tables WHERE table_type != ? AND table_schema = ? AND table_name IN (?) ORDER BY 1
     *
     * @var string
     */
    public $pattern;

    /**
     * @example 16
     *
     * @var string
     */
    public $queryCount;

    /**
     * @example 2022-08-30
     *
     * @var string
     */
    public $reportDate;

    /**
     * @example test_acc
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIP'      => 'AccessIP',
        'avgCpuTime'    => 'AvgCpuTime',
        'avgPeakMemory' => 'AvgPeakMemory',
        'avgScanSize'   => 'AvgScanSize',
        'avgStageCount' => 'AvgStageCount',
        'avgTaskCount'  => 'AvgTaskCount',
        'instanceName'  => 'InstanceName',
        'maxCpuTime'    => 'MaxCpuTime',
        'maxPeakMemory' => 'MaxPeakMemory',
        'maxScanSize'   => 'MaxScanSize',
        'maxStageCount' => 'MaxStageCount',
        'maxTaskCount'  => 'MaxTaskCount',
        'pattern'       => 'Pattern',
        'queryCount'    => 'QueryCount',
        'reportDate'    => 'ReportDate',
        'user'          => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessIP) {
            $res['AccessIP'] = $this->accessIP;
        }
        if (null !== $this->avgCpuTime) {
            $res['AvgCpuTime'] = $this->avgCpuTime;
        }
        if (null !== $this->avgPeakMemory) {
            $res['AvgPeakMemory'] = $this->avgPeakMemory;
        }
        if (null !== $this->avgScanSize) {
            $res['AvgScanSize'] = $this->avgScanSize;
        }
        if (null !== $this->avgStageCount) {
            $res['AvgStageCount'] = $this->avgStageCount;
        }
        if (null !== $this->avgTaskCount) {
            $res['AvgTaskCount'] = $this->avgTaskCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxCpuTime) {
            $res['MaxCpuTime'] = $this->maxCpuTime;
        }
        if (null !== $this->maxPeakMemory) {
            $res['MaxPeakMemory'] = $this->maxPeakMemory;
        }
        if (null !== $this->maxScanSize) {
            $res['MaxScanSize'] = $this->maxScanSize;
        }
        if (null !== $this->maxStageCount) {
            $res['MaxStageCount'] = $this->maxStageCount;
        }
        if (null !== $this->maxTaskCount) {
            $res['MaxTaskCount'] = $this->maxTaskCount;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
        }
        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }
        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AccessIP'])) {
            $model->accessIP = $map['AccessIP'];
        }
        if (isset($map['AvgCpuTime'])) {
            $model->avgCpuTime = $map['AvgCpuTime'];
        }
        if (isset($map['AvgPeakMemory'])) {
            $model->avgPeakMemory = $map['AvgPeakMemory'];
        }
        if (isset($map['AvgScanSize'])) {
            $model->avgScanSize = $map['AvgScanSize'];
        }
        if (isset($map['AvgStageCount'])) {
            $model->avgStageCount = $map['AvgStageCount'];
        }
        if (isset($map['AvgTaskCount'])) {
            $model->avgTaskCount = $map['AvgTaskCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxCpuTime'])) {
            $model->maxCpuTime = $map['MaxCpuTime'];
        }
        if (isset($map['MaxPeakMemory'])) {
            $model->maxPeakMemory = $map['MaxPeakMemory'];
        }
        if (isset($map['MaxScanSize'])) {
            $model->maxScanSize = $map['MaxScanSize'];
        }
        if (isset($map['MaxStageCount'])) {
            $model->maxStageCount = $map['MaxStageCount'];
        }
        if (isset($map['MaxTaskCount'])) {
            $model->maxTaskCount = $map['MaxTaskCount'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
        }
        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }
        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
