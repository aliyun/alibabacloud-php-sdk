<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCustinsResourceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The deadline for the CPU adjustment.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $cpuAdjustDeadline;

    /**
     * @description The maximum percentage of the system CPU resources that the instance can use.
     *
     * @example 30
     *
     * @var string
     */
    public $cpuAdjustableMaxRatio;

    /**
     * @description The maximum CPU utilization.
     *
     * @example 60
     *
     * @var string
     */
    public $cpuAdjustableMaxValue;

    /**
     * @description The CPU utilization.
     *
     * @example 10
     *
     * @var string
     */
    public $cpuIncreaseRatio;

    /**
     * @description The CPU utilization. Unit: percentage.
     *
     * @example 20
     *
     * @var string
     */
    public $cpuIncreaseRatioValue;

    /**
     * @description The instance ID.
     *
     * @example rm-wz92gn1ll9fe5d3a4
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The maximum IOPS.
     *
     * @example 20
     *
     * @var string
     */
    public $iopsAdjustableMaxValue;

    /**
     * @description The deadline for the adjustment of the maximum number of connections.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $maxConnAdjustDeadline;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 100
     *
     * @var string
     */
    public $maxConnAdjustableMaxValue;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 100
     *
     * @var string
     */
    public $maxConnIncreaseRatio;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 20
     *
     * @var string
     */
    public $maxConnIncreaseRatioValue;

    /**
     * @description The deadline for the adjustment of the maximum IOPS.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $maxIopsAdjustDeadline;

    /**
     * @description The maximum IOPS.
     *
     * @example 100
     *
     * @var string
     */
    public $maxIopsIncreaseRatio;

    /**
     * @description The maximum IOPS that can be supported by the instance.
     *
     * @example 20
     *
     * @var string
     */
    public $maxIopsIncreaseRatioValue;

    /**
     * @description The maximum percentage of the system memory that the instance can use.
     *
     * @example 60
     *
     * @var string
     */
    public $memAdjustableMaxRatio;

    /**
     * @description The maximum value of the resources to be evaluated.
     *
     * @example 200
     *
     * @var string
     */
    public $memAdjustableMaxValue;

    /**
     * @description The deadline for the memory adjustment.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $memoryAdjustDeadline;

    /**
     * @description The memory increase percentage.
     *
     * @example 2023-10-25
     *
     * @var string
     */
    public $memoryIncreaseRatio;

    /**
     * @description The memory usage. Unit: MB.
     *
     * @example 200
     *
     * @var string
     */
    public $memoryIncreaseRatioValue;

    /**
     * @description The number of CPUs of the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $originCpu;

    /**
     * @description The maximum number of concurrent connections.
     *
     * @example 30
     *
     * @var string
     */
    public $originMaxConn;

    /**
     * @description The maximum IOPS.
     *
     * @example 20
     *
     * @var string
     */
    public $originMaxIops;

    /**
     * @description The actual memory used. Unit: MB.
     *
     * @example 20
     *
     * @var string
     */
    public $originMemory;
    protected $_name = [
        'cpuAdjustDeadline'         => 'CpuAdjustDeadline',
        'cpuAdjustableMaxRatio'     => 'CpuAdjustableMaxRatio',
        'cpuAdjustableMaxValue'     => 'CpuAdjustableMaxValue',
        'cpuIncreaseRatio'          => 'CpuIncreaseRatio',
        'cpuIncreaseRatioValue'     => 'CpuIncreaseRatioValue',
        'DBInstanceId'              => 'DBInstanceId',
        'iopsAdjustableMaxValue'    => 'IopsAdjustableMaxValue',
        'maxConnAdjustDeadline'     => 'MaxConnAdjustDeadline',
        'maxConnAdjustableMaxValue' => 'MaxConnAdjustableMaxValue',
        'maxConnIncreaseRatio'      => 'MaxConnIncreaseRatio',
        'maxConnIncreaseRatioValue' => 'MaxConnIncreaseRatioValue',
        'maxIopsAdjustDeadline'     => 'MaxIopsAdjustDeadline',
        'maxIopsIncreaseRatio'      => 'MaxIopsIncreaseRatio',
        'maxIopsIncreaseRatioValue' => 'MaxIopsIncreaseRatioValue',
        'memAdjustableMaxRatio'     => 'MemAdjustableMaxRatio',
        'memAdjustableMaxValue'     => 'MemAdjustableMaxValue',
        'memoryAdjustDeadline'      => 'MemoryAdjustDeadline',
        'memoryIncreaseRatio'       => 'MemoryIncreaseRatio',
        'memoryIncreaseRatioValue'  => 'MemoryIncreaseRatioValue',
        'originCpu'                 => 'OriginCpu',
        'originMaxConn'             => 'OriginMaxConn',
        'originMaxIops'             => 'OriginMaxIops',
        'originMemory'              => 'OriginMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuAdjustDeadline) {
            $res['CpuAdjustDeadline'] = $this->cpuAdjustDeadline;
        }
        if (null !== $this->cpuAdjustableMaxRatio) {
            $res['CpuAdjustableMaxRatio'] = $this->cpuAdjustableMaxRatio;
        }
        if (null !== $this->cpuAdjustableMaxValue) {
            $res['CpuAdjustableMaxValue'] = $this->cpuAdjustableMaxValue;
        }
        if (null !== $this->cpuIncreaseRatio) {
            $res['CpuIncreaseRatio'] = $this->cpuIncreaseRatio;
        }
        if (null !== $this->cpuIncreaseRatioValue) {
            $res['CpuIncreaseRatioValue'] = $this->cpuIncreaseRatioValue;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->iopsAdjustableMaxValue) {
            $res['IopsAdjustableMaxValue'] = $this->iopsAdjustableMaxValue;
        }
        if (null !== $this->maxConnAdjustDeadline) {
            $res['MaxConnAdjustDeadline'] = $this->maxConnAdjustDeadline;
        }
        if (null !== $this->maxConnAdjustableMaxValue) {
            $res['MaxConnAdjustableMaxValue'] = $this->maxConnAdjustableMaxValue;
        }
        if (null !== $this->maxConnIncreaseRatio) {
            $res['MaxConnIncreaseRatio'] = $this->maxConnIncreaseRatio;
        }
        if (null !== $this->maxConnIncreaseRatioValue) {
            $res['MaxConnIncreaseRatioValue'] = $this->maxConnIncreaseRatioValue;
        }
        if (null !== $this->maxIopsAdjustDeadline) {
            $res['MaxIopsAdjustDeadline'] = $this->maxIopsAdjustDeadline;
        }
        if (null !== $this->maxIopsIncreaseRatio) {
            $res['MaxIopsIncreaseRatio'] = $this->maxIopsIncreaseRatio;
        }
        if (null !== $this->maxIopsIncreaseRatioValue) {
            $res['MaxIopsIncreaseRatioValue'] = $this->maxIopsIncreaseRatioValue;
        }
        if (null !== $this->memAdjustableMaxRatio) {
            $res['MemAdjustableMaxRatio'] = $this->memAdjustableMaxRatio;
        }
        if (null !== $this->memAdjustableMaxValue) {
            $res['MemAdjustableMaxValue'] = $this->memAdjustableMaxValue;
        }
        if (null !== $this->memoryAdjustDeadline) {
            $res['MemoryAdjustDeadline'] = $this->memoryAdjustDeadline;
        }
        if (null !== $this->memoryIncreaseRatio) {
            $res['MemoryIncreaseRatio'] = $this->memoryIncreaseRatio;
        }
        if (null !== $this->memoryIncreaseRatioValue) {
            $res['MemoryIncreaseRatioValue'] = $this->memoryIncreaseRatioValue;
        }
        if (null !== $this->originCpu) {
            $res['OriginCpu'] = $this->originCpu;
        }
        if (null !== $this->originMaxConn) {
            $res['OriginMaxConn'] = $this->originMaxConn;
        }
        if (null !== $this->originMaxIops) {
            $res['OriginMaxIops'] = $this->originMaxIops;
        }
        if (null !== $this->originMemory) {
            $res['OriginMemory'] = $this->originMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuAdjustDeadline'])) {
            $model->cpuAdjustDeadline = $map['CpuAdjustDeadline'];
        }
        if (isset($map['CpuAdjustableMaxRatio'])) {
            $model->cpuAdjustableMaxRatio = $map['CpuAdjustableMaxRatio'];
        }
        if (isset($map['CpuAdjustableMaxValue'])) {
            $model->cpuAdjustableMaxValue = $map['CpuAdjustableMaxValue'];
        }
        if (isset($map['CpuIncreaseRatio'])) {
            $model->cpuIncreaseRatio = $map['CpuIncreaseRatio'];
        }
        if (isset($map['CpuIncreaseRatioValue'])) {
            $model->cpuIncreaseRatioValue = $map['CpuIncreaseRatioValue'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IopsAdjustableMaxValue'])) {
            $model->iopsAdjustableMaxValue = $map['IopsAdjustableMaxValue'];
        }
        if (isset($map['MaxConnAdjustDeadline'])) {
            $model->maxConnAdjustDeadline = $map['MaxConnAdjustDeadline'];
        }
        if (isset($map['MaxConnAdjustableMaxValue'])) {
            $model->maxConnAdjustableMaxValue = $map['MaxConnAdjustableMaxValue'];
        }
        if (isset($map['MaxConnIncreaseRatio'])) {
            $model->maxConnIncreaseRatio = $map['MaxConnIncreaseRatio'];
        }
        if (isset($map['MaxConnIncreaseRatioValue'])) {
            $model->maxConnIncreaseRatioValue = $map['MaxConnIncreaseRatioValue'];
        }
        if (isset($map['MaxIopsAdjustDeadline'])) {
            $model->maxIopsAdjustDeadline = $map['MaxIopsAdjustDeadline'];
        }
        if (isset($map['MaxIopsIncreaseRatio'])) {
            $model->maxIopsIncreaseRatio = $map['MaxIopsIncreaseRatio'];
        }
        if (isset($map['MaxIopsIncreaseRatioValue'])) {
            $model->maxIopsIncreaseRatioValue = $map['MaxIopsIncreaseRatioValue'];
        }
        if (isset($map['MemAdjustableMaxRatio'])) {
            $model->memAdjustableMaxRatio = $map['MemAdjustableMaxRatio'];
        }
        if (isset($map['MemAdjustableMaxValue'])) {
            $model->memAdjustableMaxValue = $map['MemAdjustableMaxValue'];
        }
        if (isset($map['MemoryAdjustDeadline'])) {
            $model->memoryAdjustDeadline = $map['MemoryAdjustDeadline'];
        }
        if (isset($map['MemoryIncreaseRatio'])) {
            $model->memoryIncreaseRatio = $map['MemoryIncreaseRatio'];
        }
        if (isset($map['MemoryIncreaseRatioValue'])) {
            $model->memoryIncreaseRatioValue = $map['MemoryIncreaseRatioValue'];
        }
        if (isset($map['OriginCpu'])) {
            $model->originCpu = $map['OriginCpu'];
        }
        if (isset($map['OriginMaxConn'])) {
            $model->originMaxConn = $map['OriginMaxConn'];
        }
        if (isset($map['OriginMaxIops'])) {
            $model->originMaxIops = $map['OriginMaxIops'];
        }
        if (isset($map['OriginMemory'])) {
            $model->originMemory = $map['OriginMemory'];
        }

        return $model;
    }
}
