<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCustinsResourceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cpuAdjustDeadline;
    /**
     * @var string
     */
    public $cpuAdjustableMaxRatio;
    /**
     * @var string
     */
    public $cpuAdjustableMaxValue;
    /**
     * @var string
     */
    public $cpuIncreaseRatio;
    /**
     * @var string
     */
    public $cpuIncreaseRatioValue;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $iopsAdjustableMaxValue;
    /**
     * @var string
     */
    public $maxConnAdjustDeadline;
    /**
     * @var string
     */
    public $maxConnAdjustableMaxValue;
    /**
     * @var string
     */
    public $maxConnIncreaseRatio;
    /**
     * @var string
     */
    public $maxConnIncreaseRatioValue;
    /**
     * @var string
     */
    public $maxIopsAdjustDeadline;
    /**
     * @var string
     */
    public $maxIopsIncreaseRatio;
    /**
     * @var string
     */
    public $maxIopsIncreaseRatioValue;
    /**
     * @var string
     */
    public $memAdjustableMaxRatio;
    /**
     * @var string
     */
    public $memAdjustableMaxValue;
    /**
     * @var string
     */
    public $memoryAdjustDeadline;
    /**
     * @var string
     */
    public $memoryIncreaseRatio;
    /**
     * @var string
     */
    public $memoryIncreaseRatioValue;
    /**
     * @var string
     */
    public $originCpu;
    /**
     * @var string
     */
    public $originMaxConn;
    /**
     * @var string
     */
    public $originMaxIops;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
