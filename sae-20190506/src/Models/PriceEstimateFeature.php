<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class PriceEstimateFeature extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var float
     */
    public $cpuCore;

    /**
     * @var string
     */
    public $cpuStrategy;

    /**
     * @var string
     */
    public $cpuUtilLevel;

    /**
     * @var float[]
     */
    public $cpuUtilMetrics;

    /**
     * @var bool
     */
    public $enableCpuIdle;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var int
     */
    public $ephemeralStorageGiB;

    /**
     * @var int
     */
    public $highLoadInstanceCount;

    /**
     * @var float
     */
    public $highLoadQps;

    /**
     * @var int
     */
    public $highLoadSeconds;

    /**
     * @var float
     */
    public $instanceQps;

    /**
     * @var float
     */
    public $internetOutboundGiB;

    /**
     * @var int
     */
    public $lowLoadInstanceCount;

    /**
     * @var float
     */
    public $lowLoadQps;

    /**
     * @var int
     */
    public $lowLoadSeconds;

    /**
     * @var int
     */
    public $maxInstanceCount;

    /**
     * @var float
     */
    public $memoryGiB;

    /**
     * @var int
     */
    public $minInstanceCount;

    /**
     * @var string
     */
    public $newSaeVersion;

    /**
     * @var int
     */
    public $noneLoadInstanceCount;

    /**
     * @var int
     */
    public $noneLoadSeconds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
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

    public function validate()
    {
        if (\is_array($this->cpuUtilMetrics)) {
            Model::validateArray($this->cpuUtilMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            if (\is_array($this->cpuUtilMetrics)) {
                $res['CpuUtilMetrics'] = [];
                $n1 = 0;
                foreach ($this->cpuUtilMetrics as $item1) {
                    $res['CpuUtilMetrics'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
                $model->cpuUtilMetrics = [];
                $n1 = 0;
                foreach ($map['CpuUtilMetrics'] as $item1) {
                    $model->cpuUtilMetrics[$n1++] = $item1;
                }
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
