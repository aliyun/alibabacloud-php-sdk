<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs\packConfig;

class instanceSpecs extends Model
{
    /**
     * @var int
     */
    public $availableDefenseTimes;

    /**
     * @var string
     */
    public $availableDeleteBlackholeCount;

    /**
     * @var int
     */
    public $defenseTimesPercent;

    /**
     * @var int
     */
    public $downgradeStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isFullDefenseMode;

    /**
     * @var packConfig
     */
    public $packConfig;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $totalDefenseTimes;
    protected $_name = [
        'availableDefenseTimes' => 'AvailableDefenseTimes',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'defenseTimesPercent' => 'DefenseTimesPercent',
        'downgradeStatus' => 'DowngradeStatus',
        'instanceId' => 'InstanceId',
        'isFullDefenseMode' => 'IsFullDefenseMode',
        'packConfig' => 'PackConfig',
        'region' => 'Region',
        'totalDefenseTimes' => 'TotalDefenseTimes',
    ];

    public function validate()
    {
        if (null !== $this->packConfig) {
            $this->packConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toArray($noStream) : $this->packConfig;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->totalDefenseTimes) {
            $res['TotalDefenseTimes'] = $this->totalDefenseTimes;
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
