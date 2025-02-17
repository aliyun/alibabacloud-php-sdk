<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration\tag;

class launchConfiguration extends Model
{
    /**
     * @var arn[]
     */
    public $arn;
    /**
     * @var string
     */
    public $autoReleaseTime;
    /**
     * @var string
     */
    public $creditSpecification;
    /**
     * @var dataDisk[]
     */
    public $dataDisk;
    /**
     * @var string
     */
    public $deploymentSetId;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string[]
     */
    public $hostNames;
    /**
     * @var string
     */
    public $imageFamily;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $instanceDescription;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $internetChargeType;
    /**
     * @var int
     */
    public $internetMaxBandwidthIn;
    /**
     * @var int
     */
    public $internetMaxBandwidthOut;
    /**
     * @var string
     */
    public $ioOptimized;
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var string
     */
    public $password;
    /**
     * @var bool
     */
    public $passwordInherit;
    /**
     * @var string
     */
    public $ramRoleName;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $securityEnhancementStrategy;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string[]
     */
    public $securityGroupIds;
    /**
     * @var systemDisk
     */
    public $systemDisk;
    /**
     * @var string
     */
    public $systemDiskCategory;
    /**
     * @var string
     */
    public $systemDiskDescription;
    /**
     * @var string
     */
    public $systemDiskName;
    /**
     * @var string
     */
    public $systemDiskPerformanceLevel;
    /**
     * @var int
     */
    public $systemDiskSize;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string
     */
    public $userData;
    /**
     * @var bool
     */
    public $autoRenew;
    /**
     * @var int
     */
    public $autoRenewPeriod;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $periodUnit;
    protected $_name = [
        'arn'                         => 'Arn',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'creditSpecification'         => 'CreditSpecification',
        'dataDisk'                    => 'DataDisk',
        'deploymentSetId'             => 'DeploymentSetId',
        'hostName'                    => 'HostName',
        'hostNames'                   => 'HostNames',
        'imageFamily'                 => 'ImageFamily',
        'imageId'                     => 'ImageId',
        'instanceDescription'         => 'InstanceDescription',
        'instanceName'                => 'InstanceName',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'keyPairName'                 => 'KeyPairName',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'ramRoleName'                 => 'RamRoleName',
        'resourceGroupId'             => 'ResourceGroupId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'systemDisk'                  => 'SystemDisk',
        'systemDiskCategory'          => 'SystemDiskCategory',
        'systemDiskDescription'       => 'SystemDiskDescription',
        'systemDiskName'              => 'SystemDiskName',
        'systemDiskPerformanceLevel'  => 'SystemDiskPerformanceLevel',
        'systemDiskSize'              => 'SystemDiskSize',
        'tag'                         => 'Tag',
        'userData'                    => 'UserData',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
    ];

    public function validate()
    {
        if (\is_array($this->arn)) {
            Model::validateArray($this->arn);
        }
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (\is_array($this->hostNames)) {
            Model::validateArray($this->hostNames);
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            if (\is_array($this->arn)) {
                $res['Arn'] = [];
                $n1         = 0;
                foreach ($this->arn as $item1) {
                    $res['Arn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }

        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }

        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1              = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->hostNames) {
            if (\is_array($this->hostNames)) {
                $res['HostNames'] = [];
                $n1               = 0;
                foreach ($this->hostNames as $item1) {
                    $res['HostNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
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

        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }

        if (null !== $this->systemDiskDescription) {
            $res['SystemDiskDescription'] = $this->systemDiskDescription;
        }

        if (null !== $this->systemDiskName) {
            $res['SystemDiskName'] = $this->systemDiskName;
        }

        if (null !== $this->systemDiskPerformanceLevel) {
            $res['SystemDiskPerformanceLevel'] = $this->systemDiskPerformanceLevel;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
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
        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n1         = 0;
                foreach ($map['Arn'] as $item1) {
                    $model->arn[$n1++] = arn::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }

        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }

        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1              = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1++] = dataDisk::fromMap($item1);
                }
            }
        }

        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['HostNames'])) {
            if (!empty($map['HostNames'])) {
                $model->hostNames = [];
                $n1               = 0;
                foreach ($map['HostNames'] as $item1) {
                    $model->hostNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
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

        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }

        if (isset($map['SystemDiskDescription'])) {
            $model->systemDiskDescription = $map['SystemDiskDescription'];
        }

        if (isset($map['SystemDiskName'])) {
            $model->systemDiskName = $map['SystemDiskName'];
        }

        if (isset($map['SystemDiskPerformanceLevel'])) {
            $model->systemDiskPerformanceLevel = $map['SystemDiskPerformanceLevel'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        return $model;
    }
}
