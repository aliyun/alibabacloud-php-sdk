<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateData\dataDisks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateData\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateData\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateData\tags;
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
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var dataDisks[]
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
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $instanceName;

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
     * @var networkInterfaces[]
     */
    public $networkInterfaces;
    protected $_name = [
        'systemDisk'                  => 'SystemDisk',
        'vpcId'                       => 'VpcId',
        'keyPairName'                 => 'KeyPairName',
        'securityGroupId'             => 'SecurityGroupId',
        'tags'                        => 'Tags',
        'networkType'                 => 'NetworkType',
        'dataDisks'                   => 'DataDisks',
        'spotStrategy'                => 'SpotStrategy',
        'enableVmOsConfig'            => 'EnableVmOsConfig',
        'description'                 => 'Description',
        'spotDuration'                => 'SpotDuration',
        'instanceName'                => 'InstanceName',
        'userData'                    => 'UserData',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'passwordInherit'             => 'PasswordInherit',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'imageId'                     => 'ImageId',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'imageOwnerAlias'             => 'ImageOwnerAlias',
        'hostName'                    => 'HostName',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'instanceType'                => 'InstanceType',
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
            $res['NetworkInterfaces'] = [];
            if (null !== $this->networkInterfaces && \is_array($this->networkInterfaces)) {
                $n = 0;
                foreach ($this->networkInterfaces as $item) {
                    $res['NetworkInterfaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n                = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? dataDisks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
            if (!empty($map['NetworkInterfaces'])) {
                $model->networkInterfaces = [];
                $n                        = 0;
                foreach ($map['NetworkInterfaces'] as $item) {
                    $model->networkInterfaces[$n++] = null !== $item ? networkInterfaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
