<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\hibernationOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateInstanceRequest\tag;

class CreateInstanceRequest extends Model
{
    /**
     * @var hibernationOptions
     */
    public $hibernationOptions;

    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var string
     */
    public $affinity;

    /**
     * @var arn[]
     */
    public $arn;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterId;

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
    public $dedicatedHostId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var int
     */
    public $deploymentSetGroupNo;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var string
     */
    public $httpEndpoint;

    /**
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @var string
     */
    public $httpTokens;

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
    public $innerIpAddress;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

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
    public $nodeControllerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $passwordInherit;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $securityEnhancementStrategy;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $spotInterruptionBehavior;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var string
     */
    public $storageSetId;

    /**
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $tenancy;

    /**
     * @var bool
     */
    public $useAdditionalService;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vlanId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'hibernationOptions' => 'HibernationOptions',
        'privatePoolOptions' => 'PrivatePoolOptions',
        'systemDisk' => 'SystemDisk',
        'affinity' => 'Affinity',
        'arn' => 'Arn',
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'clientToken' => 'ClientToken',
        'clusterId' => 'ClusterId',
        'creditSpecification' => 'CreditSpecification',
        'dataDisk' => 'DataDisk',
        'dedicatedHostId' => 'DedicatedHostId',
        'deletionProtection' => 'DeletionProtection',
        'deploymentSetGroupNo' => 'DeploymentSetGroupNo',
        'deploymentSetId' => 'DeploymentSetId',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'hostName' => 'HostName',
        'hpcClusterId' => 'HpcClusterId',
        'httpEndpoint' => 'HttpEndpoint',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
        'httpTokens' => 'HttpTokens',
        'imageFamily' => 'ImageFamily',
        'imageId' => 'ImageId',
        'innerIpAddress' => 'InnerIpAddress',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'internetMaxBandwidthIn' => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized' => 'IoOptimized',
        'keyPairName' => 'KeyPairName',
        'nodeControllerId' => 'NodeControllerId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'passwordInherit' => 'PasswordInherit',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'privateIpAddress' => 'PrivateIpAddress',
        'ramRoleName' => 'RamRoleName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId' => 'SecurityGroupId',
        'spotDuration' => 'SpotDuration',
        'spotInterruptionBehavior' => 'SpotInterruptionBehavior',
        'spotPriceLimit' => 'SpotPriceLimit',
        'spotStrategy' => 'SpotStrategy',
        'storageSetId' => 'StorageSetId',
        'storageSetPartitionNumber' => 'StorageSetPartitionNumber',
        'tag' => 'Tag',
        'tenancy' => 'Tenancy',
        'useAdditionalService' => 'UseAdditionalService',
        'userData' => 'UserData',
        'vSwitchId' => 'VSwitchId',
        'vlanId' => 'VlanId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->hibernationOptions) {
            $this->hibernationOptions->validate();
        }
        if (null !== $this->privatePoolOptions) {
            $this->privatePoolOptions->validate();
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (\is_array($this->arn)) {
            Model::validateArray($this->arn);
        }
        if (\is_array($this->dataDisk)) {
            Model::validateArray($this->dataDisk);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hibernationOptions) {
            $res['HibernationOptions'] = null !== $this->hibernationOptions ? $this->hibernationOptions->toArray($noStream) : $this->hibernationOptions;
        }

        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }

        if (null !== $this->arn) {
            if (\is_array($this->arn)) {
                $res['Arn'] = [];
                $n1 = 0;
                foreach ($this->arn as $item1) {
                    $res['Arn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }

        if (null !== $this->dataDisk) {
            if (\is_array($this->dataDisk)) {
                $res['DataDisk'] = [];
                $n1 = 0;
                foreach ($this->dataDisk as $item1) {
                    $res['DataDisk'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->deploymentSetGroupNo) {
            $res['DeploymentSetGroupNo'] = $this->deploymentSetGroupNo;
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

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }

        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }

        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }

        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }

        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
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

        if (null !== $this->nodeControllerId) {
            $res['NodeControllerId'] = $this->nodeControllerId;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityEnhancementStrategy) {
            $res['SecurityEnhancementStrategy'] = $this->securityEnhancementStrategy;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }

        if (null !== $this->spotInterruptionBehavior) {
            $res['SpotInterruptionBehavior'] = $this->spotInterruptionBehavior;
        }

        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }

        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        if (null !== $this->useAdditionalService) {
            $res['UseAdditionalService'] = $this->useAdditionalService;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['HibernationOptions'])) {
            $model->hibernationOptions = hibernationOptions::fromMap($map['HibernationOptions']);
        }

        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }

        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n1 = 0;
                foreach ($map['Arn'] as $item1) {
                    $model->arn[$n1++] = arn::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }

        if (isset($map['DataDisk'])) {
            if (!empty($map['DataDisk'])) {
                $model->dataDisk = [];
                $n1 = 0;
                foreach ($map['DataDisk'] as $item1) {
                    $model->dataDisk[$n1++] = dataDisk::fromMap($item1);
                }
            }
        }

        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['DeploymentSetGroupNo'])) {
            $model->deploymentSetGroupNo = $map['DeploymentSetGroupNo'];
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

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }

        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }

        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }

        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }

        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = $map['InnerIpAddress'];
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

        if (isset($map['NodeControllerId'])) {
            $model->nodeControllerId = $map['NodeControllerId'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityEnhancementStrategy'])) {
            $model->securityEnhancementStrategy = $map['SecurityEnhancementStrategy'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }

        if (isset($map['SpotInterruptionBehavior'])) {
            $model->spotInterruptionBehavior = $map['SpotInterruptionBehavior'];
        }

        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }

        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        if (isset($map['UseAdditionalService'])) {
            $model->useAdditionalService = $map['UseAdditionalService'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
