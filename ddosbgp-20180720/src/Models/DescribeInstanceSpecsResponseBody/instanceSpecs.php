<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs\packConfig;
use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @description The available best-effort protection sessions.
     *
     * @example 2
     *
     * @var int
     */
    public $availableDefenseTimes;

    /**
     * @description The number of times that blackhole filtering can be deactivated.
     *
     * @example 100
     *
     * @var string
     */
    public $availableDeleteBlackholeCount;

    /**
     * @description The percentage of the used best-effort protection sessions. Unit: %.
     *
     * @example 30
     *
     * @var int
     */
    public $defenseTimesPercent;

    /**
     * @description Indicates whether the instance is downgraded. Valid value:
     *
     *   **8**: The instance is downgraded due to excessive bandwidth usage.
     *
     * @example 8
     *
     * @var int
     */
    public $downgradeStatus;

    /**
     * @description The ID of the Anti-DDoS Origin instance.
     *
     * @example ddosbgp-cn-n6w1r7nz****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether best-effort protection is enabled. Valid values:
     *
     *   **0**: Best-effort protection is disabled.
     *   **1**: Best-effort protection is enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $isFullDefenseMode;

    /**
     * @description The configurations of the Anti-DDoS Origin instance, including the number of protected IP addresses and protection bandwidth.
     *
     * @var packConfig
     */
    public $packConfig;

    /**
     * @description The region ID of the Anti-DDoS Origin instance.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the name of the region.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The total best-effort protection sessions.
     *
     * @example 2
     *
     * @var int
     */
    public $totalDefenseTimes;
    protected $_name = [
        'availableDefenseTimes'         => 'AvailableDefenseTimes',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'defenseTimesPercent'           => 'DefenseTimesPercent',
        'downgradeStatus'               => 'DowngradeStatus',
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
        if (null !== $this->defenseTimesPercent) {
            $res['DefenseTimesPercent'] = $this->defenseTimesPercent;
        }
        if (null !== $this->downgradeStatus) {
            $res['DowngradeStatus'] = $this->downgradeStatus;
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
        if (isset($map['DefenseTimesPercent'])) {
            $model->defenseTimesPercent = $map['DefenseTimesPercent'];
        }
        if (isset($map['DowngradeStatus'])) {
            $model->downgradeStatus = $map['DowngradeStatus'];
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
