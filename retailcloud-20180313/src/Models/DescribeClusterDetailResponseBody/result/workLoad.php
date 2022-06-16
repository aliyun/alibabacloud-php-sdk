<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class workLoad extends Model
{
    /**
     * @var int
     */
    public $allNodeCount;

    /**
     * @var int
     */
    public $allocateAllPodCount;

    /**
     * @var int
     */
    public $allocateAppPodCount;

    /**
     * @var string
     */
    public $cpuCapacityTotal;

    /**
     * @var string
     */
    public $cpuLevel;

    /**
     * @var string
     */
    public $cpuRequest;

    /**
     * @var string
     */
    public $cpuRequestPercent;

    /**
     * @var string
     */
    public $cpuTotal;

    /**
     * @var string
     */
    public $cpuUse;

    /**
     * @var string
     */
    public $cpuUsePercent;

    /**
     * @var string
     */
    public $memCapacityTotal;

    /**
     * @var string
     */
    public $memLevel;

    /**
     * @var string
     */
    public $memRequest;

    /**
     * @var string
     */
    public $memRequestPercent;

    /**
     * @var string
     */
    public $memTotal;

    /**
     * @var string
     */
    public $memUse;

    /**
     * @var string
     */
    public $memUsePercent;
    protected $_name = [
        'allNodeCount'        => 'AllNodeCount',
        'allocateAllPodCount' => 'AllocateAllPodCount',
        'allocateAppPodCount' => 'AllocateAppPodCount',
        'cpuCapacityTotal'    => 'CpuCapacityTotal',
        'cpuLevel'            => 'CpuLevel',
        'cpuRequest'          => 'CpuRequest',
        'cpuRequestPercent'   => 'CpuRequestPercent',
        'cpuTotal'            => 'CpuTotal',
        'cpuUse'              => 'CpuUse',
        'cpuUsePercent'       => 'CpuUsePercent',
        'memCapacityTotal'    => 'MemCapacityTotal',
        'memLevel'            => 'MemLevel',
        'memRequest'          => 'MemRequest',
        'memRequestPercent'   => 'MemRequestPercent',
        'memTotal'            => 'MemTotal',
        'memUse'              => 'MemUse',
        'memUsePercent'       => 'MemUsePercent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allNodeCount) {
            $res['AllNodeCount'] = $this->allNodeCount;
        }
        if (null !== $this->allocateAllPodCount) {
            $res['AllocateAllPodCount'] = $this->allocateAllPodCount;
        }
        if (null !== $this->allocateAppPodCount) {
            $res['AllocateAppPodCount'] = $this->allocateAppPodCount;
        }
        if (null !== $this->cpuCapacityTotal) {
            $res['CpuCapacityTotal'] = $this->cpuCapacityTotal;
        }
        if (null !== $this->cpuLevel) {
            $res['CpuLevel'] = $this->cpuLevel;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->cpuRequestPercent) {
            $res['CpuRequestPercent'] = $this->cpuRequestPercent;
        }
        if (null !== $this->cpuTotal) {
            $res['CpuTotal'] = $this->cpuTotal;
        }
        if (null !== $this->cpuUse) {
            $res['CpuUse'] = $this->cpuUse;
        }
        if (null !== $this->cpuUsePercent) {
            $res['CpuUsePercent'] = $this->cpuUsePercent;
        }
        if (null !== $this->memCapacityTotal) {
            $res['MemCapacityTotal'] = $this->memCapacityTotal;
        }
        if (null !== $this->memLevel) {
            $res['MemLevel'] = $this->memLevel;
        }
        if (null !== $this->memRequest) {
            $res['MemRequest'] = $this->memRequest;
        }
        if (null !== $this->memRequestPercent) {
            $res['MemRequestPercent'] = $this->memRequestPercent;
        }
        if (null !== $this->memTotal) {
            $res['MemTotal'] = $this->memTotal;
        }
        if (null !== $this->memUse) {
            $res['MemUse'] = $this->memUse;
        }
        if (null !== $this->memUsePercent) {
            $res['MemUsePercent'] = $this->memUsePercent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workLoad
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllNodeCount'])) {
            $model->allNodeCount = $map['AllNodeCount'];
        }
        if (isset($map['AllocateAllPodCount'])) {
            $model->allocateAllPodCount = $map['AllocateAllPodCount'];
        }
        if (isset($map['AllocateAppPodCount'])) {
            $model->allocateAppPodCount = $map['AllocateAppPodCount'];
        }
        if (isset($map['CpuCapacityTotal'])) {
            $model->cpuCapacityTotal = $map['CpuCapacityTotal'];
        }
        if (isset($map['CpuLevel'])) {
            $model->cpuLevel = $map['CpuLevel'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['CpuRequestPercent'])) {
            $model->cpuRequestPercent = $map['CpuRequestPercent'];
        }
        if (isset($map['CpuTotal'])) {
            $model->cpuTotal = $map['CpuTotal'];
        }
        if (isset($map['CpuUse'])) {
            $model->cpuUse = $map['CpuUse'];
        }
        if (isset($map['CpuUsePercent'])) {
            $model->cpuUsePercent = $map['CpuUsePercent'];
        }
        if (isset($map['MemCapacityTotal'])) {
            $model->memCapacityTotal = $map['MemCapacityTotal'];
        }
        if (isset($map['MemLevel'])) {
            $model->memLevel = $map['MemLevel'];
        }
        if (isset($map['MemRequest'])) {
            $model->memRequest = $map['MemRequest'];
        }
        if (isset($map['MemRequestPercent'])) {
            $model->memRequestPercent = $map['MemRequestPercent'];
        }
        if (isset($map['MemTotal'])) {
            $model->memTotal = $map['MemTotal'];
        }
        if (isset($map['MemUse'])) {
            $model->memUse = $map['MemUse'];
        }
        if (isset($map['MemUsePercent'])) {
            $model->memUsePercent = $map['MemUsePercent'];
        }

        return $model;
    }
}
