<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs\packConfig;
use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @description The ID of the Anti-DDoS Origin Enterprise instance. This parameter value is a string consisting of JSON arrays. Each element in a JSON array indicates an instance ID. If you want to query more than one instance, separate instance IDs with commas (,).
     *
     * >  You can call the [DescribeInstanceList](~~118698~~) operation to query the IDs of all Anti-DDoS Origin Enterprise instances in a specific region.
     * @example 2
     *
     * @var int
     */
    public $availableDefenseTimes;

    /**
     * @description The basic protection bandwidth of the Anti-DDoS Origin Enterprise instance. Unit: Gbit/s.
     *
     * @example 100
     *
     * @var string
     */
    public $availableDeleteBlackholeCount;

    /**
     * @description The number of IP addresses that can be protected by the Anti-DDoS Origin Enterprise instance.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the Anti-DDoS Origin Enterprise instance.
     *
     * >  You can call the [DescribeRegions](~~118703~~) operation to query the name of the region.
     * @example 1
     *
     * @var int
     */
    public $isFullDefenseMode;

    /**
     * @description The specifications of the Anti-DDoS Origin Enterprise instance, including whether the unlimited protection feature is enabled, and the numbers of times that the unlimited protection feature can be enabled and has been enabled.
     *
     * @var packConfig
     */
    public $packConfig;

    /**
     * @description The number of times that blackhole filtering can be deactivated.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of times that the unlimited protection feature can be enabled.
     *
     * @example 2
     *
     * @var int
     */
    public $totalDefenseTimes;
    protected $_name = [
        'availableDefenseTimes'         => 'AvailableDefenseTimes',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'instanceId'                    => 'InstanceId',
        'isFullDefenseMode'             => 'IsFullDefenseMode',
        'packConfig'                    => 'PackConfig',
        'region'                        => 'Region',
        'totalDefenseTimes'             => 'TotalDefenseTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableDefenseTimes) {
            $res['AvailableDefenseTimes'] = $this->availableDefenseTimes;
        }
        if (null !== $this->availableDeleteBlackholeCount) {
            $res['AvailableDeleteBlackholeCount'] = $this->availableDeleteBlackholeCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isFullDefenseMode) {
            $res['IsFullDefenseMode'] = $this->isFullDefenseMode;
        }
        if (null !== $this->packConfig) {
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->totalDefenseTimes) {
            $res['TotalDefenseTimes'] = $this->totalDefenseTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableDefenseTimes'])) {
            $model->availableDefenseTimes = $map['AvailableDefenseTimes'];
        }
        if (isset($map['AvailableDeleteBlackholeCount'])) {
            $model->availableDeleteBlackholeCount = $map['AvailableDeleteBlackholeCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsFullDefenseMode'])) {
            $model->isFullDefenseMode = $map['IsFullDefenseMode'];
        }
        if (isset($map['PackConfig'])) {
            $model->packConfig = packConfig::fromMap($map['PackConfig']);
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TotalDefenseTimes'])) {
            $model->totalDefenseTimes = $map['TotalDefenseTimes'];
        }

        return $model;
    }
}
