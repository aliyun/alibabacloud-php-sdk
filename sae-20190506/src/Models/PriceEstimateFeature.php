<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class PriceEstimateFeature extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $appCount;

    /**
     * @description This parameter is required.
     *
     * @example Web/MicroService
     *
     * @var string
     */
    public $appType;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var float
     */
    public $cpuCore;

    /**
     * @description This parameter is required.
     *
     * @example Request/Always
     *
     * @var string
     */
    public $cpuStrategy;

    /**
     * @example L1
     *
     * @var string
     */
    public $cpuUtilLevel;

    /**
     * @var float[]
     */
    public $cpuUtilMetrics;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCpuIdle;

    /**
     * @description This parameter is required.
     *
     * @example Test/Production
     *
     * @var string
     */
    public $envType;

    /**
     * @example 30
     *
     * @var int
     */
    public $ephemeralStorageGiB;

    /**
     * @example 3
     *
     * @var int
     */
    public $highLoadInstanceCount;

    /**
     * @example 5
     *
     * @var float
     */
    public $highLoadQps;

    /**
     * @example 3600
     *
     * @var int
     */
    public $highLoadSeconds;

    /**
     * @example 2
     *
     * @var float
     */
    public $instanceQps;

    /**
     * @example 24
     *
     * @var float
     */
    public $internetOutboundGiB;

    /**
     * @example 1
     *
     * @var int
     */
    public $lowLoadInstanceCount;

    /**
     * @example 2
     *
     * @var float
     */
    public $lowLoadQps;

    /**
     * @example 3600
     *
     * @var int
     */
    public $lowLoadSeconds;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxInstanceCount;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var float
     */
    public $memoryGiB;

    /**
     * @example 1
     *
     * @var int
     */
    public $minInstanceCount;

    /**
     * @example std
     *
     * @var string
     */
    public $newSaeVersion;

    /**
     * @example 0
     *
     * @var int
     */
    public $noneLoadInstanceCount;

    /**
     * @example 79200
     *
     * @var int
     */
    public $noneLoadSeconds;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example haiguang
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'appCount' => 'AppCount',
        'appType' => 'AppType',
        'cpuCore' => 'CpuCore',
        'cpuStrategy' => 'CpuStrategy',
        'cpuUtilLevel' => 'CpuUtilLevel',
        'cpuUtilMetrics' => 'CpuUtilMetrics',
        'enableCpuIdle' => 'EnableCpuIdle',
        'envType' => 'EnvType',
        'ephemeralStorageGiB' => 'EphemeralStorageGiB',
        'highLoadInstanceCount' => 'HighLoadInstanceCount',
        'highLoadQps' => 'HighLoadQps',
        'highLoadSeconds' => 'HighLoadSeconds',
        'instanceQps' => 'InstanceQps',
        'internetOutboundGiB' => 'InternetOutboundGiB',
        'lowLoadInstanceCount' => 'LowLoadInstanceCount',
        'lowLoadQps' => 'LowLoadQps',
        'lowLoadSeconds' => 'LowLoadSeconds',
        'maxInstanceCount' => 'MaxInstanceCount',
        'memoryGiB' => 'MemoryGiB',
        'minInstanceCount' => 'MinInstanceCount',
        'newSaeVersion' => 'NewSaeVersion',
        'noneLoadInstanceCount' => 'NoneLoadInstanceCount',
        'noneLoadSeconds' => 'NoneLoadSeconds',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCount) {
            $res['AppCount'] = $this->appCount;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->cpuCore) {
            $res['CpuCore'] = $this->cpuCore;
        }
        if (null !== $this->cpuStrategy) {
            $res['CpuStrategy'] = $this->cpuStrategy;
        }
        if (null !== $this->cpuUtilLevel) {
            $res['CpuUtilLevel'] = $this->cpuUtilLevel;
        }
        if (null !== $this->cpuUtilMetrics) {
            $res['CpuUtilMetrics'] = $this->cpuUtilMetrics;
        }
        if (null !== $this->enableCpuIdle) {
            $res['EnableCpuIdle'] = $this->enableCpuIdle;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->ephemeralStorageGiB) {
            $res['EphemeralStorageGiB'] = $this->ephemeralStorageGiB;
        }
        if (null !== $this->highLoadInstanceCount) {
            $res['HighLoadInstanceCount'] = $this->highLoadInstanceCount;
        }
        if (null !== $this->highLoadQps) {
            $res['HighLoadQps'] = $this->highLoadQps;
        }
        if (null !== $this->highLoadSeconds) {
            $res['HighLoadSeconds'] = $this->highLoadSeconds;
        }
        if (null !== $this->instanceQps) {
            $res['InstanceQps'] = $this->instanceQps;
        }
        if (null !== $this->internetOutboundGiB) {
            $res['InternetOutboundGiB'] = $this->internetOutboundGiB;
        }
        if (null !== $this->lowLoadInstanceCount) {
            $res['LowLoadInstanceCount'] = $this->lowLoadInstanceCount;
        }
        if (null !== $this->lowLoadQps) {
            $res['LowLoadQps'] = $this->lowLoadQps;
        }
        if (null !== $this->lowLoadSeconds) {
            $res['LowLoadSeconds'] = $this->lowLoadSeconds;
        }
        if (null !== $this->maxInstanceCount) {
            $res['MaxInstanceCount'] = $this->maxInstanceCount;
        }
        if (null !== $this->memoryGiB) {
            $res['MemoryGiB'] = $this->memoryGiB;
        }
        if (null !== $this->minInstanceCount) {
            $res['MinInstanceCount'] = $this->minInstanceCount;
        }
        if (null !== $this->newSaeVersion) {
            $res['NewSaeVersion'] = $this->newSaeVersion;
        }
        if (null !== $this->noneLoadInstanceCount) {
            $res['NoneLoadInstanceCount'] = $this->noneLoadInstanceCount;
        }
        if (null !== $this->noneLoadSeconds) {
            $res['NoneLoadSeconds'] = $this->noneLoadSeconds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PriceEstimateFeature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCount'])) {
            $model->appCount = $map['AppCount'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CpuCore'])) {
            $model->cpuCore = $map['CpuCore'];
        }
        if (isset($map['CpuStrategy'])) {
            $model->cpuStrategy = $map['CpuStrategy'];
        }
        if (isset($map['CpuUtilLevel'])) {
            $model->cpuUtilLevel = $map['CpuUtilLevel'];
        }
        if (isset($map['CpuUtilMetrics'])) {
            if (!empty($map['CpuUtilMetrics'])) {
                $model->cpuUtilMetrics = $map['CpuUtilMetrics'];
            }
        }
        if (isset($map['EnableCpuIdle'])) {
            $model->enableCpuIdle = $map['EnableCpuIdle'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['EphemeralStorageGiB'])) {
            $model->ephemeralStorageGiB = $map['EphemeralStorageGiB'];
        }
        if (isset($map['HighLoadInstanceCount'])) {
            $model->highLoadInstanceCount = $map['HighLoadInstanceCount'];
        }
        if (isset($map['HighLoadQps'])) {
            $model->highLoadQps = $map['HighLoadQps'];
        }
        if (isset($map['HighLoadSeconds'])) {
            $model->highLoadSeconds = $map['HighLoadSeconds'];
        }
        if (isset($map['InstanceQps'])) {
            $model->instanceQps = $map['InstanceQps'];
        }
        if (isset($map['InternetOutboundGiB'])) {
            $model->internetOutboundGiB = $map['InternetOutboundGiB'];
        }
        if (isset($map['LowLoadInstanceCount'])) {
            $model->lowLoadInstanceCount = $map['LowLoadInstanceCount'];
        }
        if (isset($map['LowLoadQps'])) {
            $model->lowLoadQps = $map['LowLoadQps'];
        }
        if (isset($map['LowLoadSeconds'])) {
            $model->lowLoadSeconds = $map['LowLoadSeconds'];
        }
        if (isset($map['MaxInstanceCount'])) {
            $model->maxInstanceCount = $map['MaxInstanceCount'];
        }
        if (isset($map['MemoryGiB'])) {
            $model->memoryGiB = $map['MemoryGiB'];
        }
        if (isset($map['MinInstanceCount'])) {
            $model->minInstanceCount = $map['MinInstanceCount'];
        }
        if (isset($map['NewSaeVersion'])) {
            $model->newSaeVersion = $map['NewSaeVersion'];
        }
        if (isset($map['NoneLoadInstanceCount'])) {
            $model->noneLoadInstanceCount = $map['NoneLoadInstanceCount'];
        }
        if (isset($map['NoneLoadSeconds'])) {
            $model->noneLoadSeconds = $map['NoneLoadSeconds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
