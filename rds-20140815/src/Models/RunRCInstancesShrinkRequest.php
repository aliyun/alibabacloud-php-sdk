<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RunRCInstancesShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataDiskShrink;

    /**
     * @example ds-uf6670sipmph5j5b6ke4
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @example Instance_Description
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example image-dsvjzw2ii8n4fvr6de
     *
     * @var string
     */
    public $imageId;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example ceshi
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description This parameter is required.
     *
     * @example mysql.i8.large.2cm
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example null
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example null
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @example null
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @example dell5502
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @example 2F9e9@a69c!e18b569c8
     *
     * @var string
     */
    public $password;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Year
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example null
     *
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @example sg-uf6av412xaxixuezol6w
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $systemDiskShrink;

    /**
     * @description This parameter is required.
     *
     * @example vsw-2vcd61ngm890sk****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-beijing-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'amount'                      => 'Amount',
        'autoPay'                     => 'AutoPay',
        'autoRenew'                   => 'AutoRenew',
        'clientToken'                 => 'ClientToken',
        'dataDiskShrink'              => 'DataDisk',
        'deploymentSetId'             => 'DeploymentSetId',
        'description'                 => 'Description',
        'dryRun'                      => 'DryRun',
        'imageId'                     => 'ImageId',
        'instanceChargeType'          => 'InstanceChargeType',
        'instanceName'                => 'InstanceName',
        'instanceType'                => 'InstanceType',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'keyPairName'                 => 'KeyPairName',
        'password'                    => 'Password',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'regionId'                    => 'RegionId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'systemDiskShrink'            => 'SystemDisk',
        'vSwitchId'                   => 'VSwitchId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataDiskShrink) {
            $res['DataDisk'] = $this->dataDiskShrink;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->systemDiskShrink) {
            $res['SystemDisk'] = $this->systemDiskShrink;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunRCInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataDisk'])) {
            $model->dataDiskShrink = $map['DataDisk'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDiskShrink = $map['SystemDisk'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
