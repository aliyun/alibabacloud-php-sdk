<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\dataDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\tags;
use AlibabaCloud\Tea\Model;

class launchTemplateData extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $enableVmOsConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var networkInterfaces
     */
    public $networkInterfaces;
    protected $_name = [
        'systemDisk'                  => 'SystemDisk',
        'deploymentSetId'             => 'DeploymentSetId',
        'vpcId'                       => 'VpcId',
        'keyPairName'                 => 'KeyPairName',
        'securityGroupId'             => 'SecurityGroupId',
        'tags'                        => 'Tags',
        'networkType'                 => 'NetworkType',
        'dataDisks'                   => 'DataDisks',
        'spotStrategy'                => 'SpotStrategy',
        'enableVmOsConfig'            => 'EnableVmOsConfig',
        'description'                 => 'Description',
        'instanceName'                => 'InstanceName',
        'spotDuration'                => 'SpotDuration',
        'userData'                    => 'UserData',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'passwordInherit'             => 'PasswordInherit',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'privateIpAddress'            => 'PrivateIpAddress',
        'imageId'                     => 'ImageId',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'imageOwnerAlias'             => 'ImageOwnerAlias',
        'hostName'                    => 'HostName',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'instanceType'                => 'InstanceType',
        'securityGroupIds'            => 'SecurityGroupIds',
        'period'                      => 'Period',
        'instanceChargeType'          => 'InstanceChargeType',
        'ioOptimized'                 => 'IoOptimized',
        'ramRoleName'                 => 'RamRoleName',
        'vSwitchId'                   => 'VSwitchId',
        'resourceGroupId'             => 'ResourceGroupId',
        'internetChargeType'          => 'InternetChargeType',
        'zoneId'                      => 'ZoneId',
        'networkInterfaces'           => 'NetworkInterfaces',
    ];

    public function validate()
    {
        Model::validateRequired('systemDisk', $this->systemDisk, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->enableVmOsConfig) {
            $res['EnableVmOsConfig'] = $this->enableVmOsConfig;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return launchTemplateData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['EnableVmOsConfig'])) {
            $model->enableVmOsConfig = $map['EnableVmOsConfig'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }

        return $model;
    }
}
