<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribePatternTypesRequest extends Model
{
    /**
     * @var string[]
     */
    public $architecture;

    /**
     * @example Include
     *
     * @var string
     */
    public $burstablePerformance;

    /**
     * @example 79425074
     *
     * @var int
     */
    public $channelId;

    /**
     * @example 2
     *
     * @var int
     */
    public $cores;

    /**
     * @var int[]
     */
    public $coresList;

    /**
     * @var string[]
     */
    public $excludedInstanceType;

    /**
     * @example EnterpriseLevel
     *
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @example 2
     *
     * @var float
     */
    public $maxPrice;

    /**
     * @example 4
     *
     * @var float
     */
    public $memory;

    /**
     * @var float[]
     */
    public $memoryList;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string[]
     */
    public $vSwitchId;
    protected $_name = [
        'architecture'         => 'Architecture',
        'burstablePerformance' => 'BurstablePerformance',
        'channelId'            => 'ChannelId',
        'cores'                => 'Cores',
        'coresList'            => 'CoresList',
        'excludedInstanceType' => 'ExcludedInstanceType',
        'instanceFamilyLevel'  => 'InstanceFamilyLevel',
        'maxPrice'             => 'MaxPrice',
        'memory'               => 'Memory',
        'memoryList'           => 'MemoryList',
        'regionId'             => 'RegionId',
        'spotStrategy'         => 'SpotStrategy',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->burstablePerformance) {
            $res['BurstablePerformance'] = $this->burstablePerformance;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->coresList) {
            $res['CoresList'] = $this->coresList;
        }
        if (null !== $this->excludedInstanceType) {
            $res['ExcludedInstanceType'] = $this->excludedInstanceType;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->maxPrice) {
            $res['MaxPrice'] = $this->maxPrice;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->memoryList) {
            $res['MemoryList'] = $this->memoryList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePatternTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            if (!empty($map['Architecture'])) {
                $model->architecture = $map['Architecture'];
            }
        }
        if (isset($map['BurstablePerformance'])) {
            $model->burstablePerformance = $map['BurstablePerformance'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['CoresList'])) {
            if (!empty($map['CoresList'])) {
                $model->coresList = $map['CoresList'];
            }
        }
        if (isset($map['ExcludedInstanceType'])) {
            if (!empty($map['ExcludedInstanceType'])) {
                $model->excludedInstanceType = $map['ExcludedInstanceType'];
            }
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['MaxPrice'])) {
            $model->maxPrice = $map['MaxPrice'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MemoryList'])) {
            if (!empty($map['MemoryList'])) {
                $model->memoryList = $map['MemoryList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['VSwitchId'])) {
            if (!empty($map['VSwitchId'])) {
                $model->vSwitchId = $map['VSwitchId'];
            }
        }

        return $model;
    }
}
