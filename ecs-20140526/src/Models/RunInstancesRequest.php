<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\arn;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\dataDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\hibernationOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\imageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\networkInterface;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\networkOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\privateDnsNameOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\schedulerOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\securityOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunInstancesRequest\tag;

class RunInstancesRequest extends Model
{
    /**
     * @var cpuOptions
     */
    public $cpuOptions;
    /**
     * @var hibernationOptions
     */
    public $hibernationOptions;
    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;
    /**
     * @var schedulerOptions
     */
    public $schedulerOptions;
    /**
     * @var securityOptions
     */
    public $securityOptions;
    /**
     * @var systemDisk
     */
    public $systemDisk;
    /**
     * @var string
     */
    public $affinity;
    /**
     * @var int
     */
    public $amount;
    /**
     * @var arn[]
     */
    public $arn;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $autoReleaseTime;
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
     * @var string[]
     */
    public $hostNames;
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
     * @var imageOptions
     */
    public $imageOptions;
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
     * @var string[]
     */
    public $ipv6Address;
    /**
     * @var int
     */
    public $ipv6AddressCount;
    /**
     * @var string
     */
    public $isp;
    /**
     * @var string
     */
    public $keyPairName;
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var string
     */
    public $launchTemplateName;
    /**
     * @var int
     */
    public $launchTemplateVersion;
    /**
     * @var int
     */
    public $minAmount;
    /**
     * @var networkInterface[]
     */
    public $networkInterface;
    /**
     * @var int
     */
    public $networkInterfaceQueueNumber;
    /**
     * @var networkOptions
     */
    public $networkOptions;
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
     * @var privateDnsNameOptions
     */
    public $privateDnsNameOptions;
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
     * @var string[]
     */
    public $securityGroupIds;
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
    public $uniqueSuffix;
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
    public $zoneId;
    protected $_name = [
        'cpuOptions'                  => 'CpuOptions',
        'hibernationOptions'          => 'HibernationOptions',
        'privatePoolOptions'          => 'PrivatePoolOptions',
        'schedulerOptions'            => 'SchedulerOptions',
        'securityOptions'             => 'SecurityOptions',
        'systemDisk'                  => 'SystemDisk',
        'affinity'                    => 'Affinity',
        'amount'                      => 'Amount',
        'arn'                         => 'Arn',
        'autoPay'                     => 'AutoPay',
        'autoReleaseTime'             => 'AutoReleaseTime',
        'autoRenew'                   => 'AutoRenew',
        'autoRenewPeriod'             => 'AutoRenewPeriod',
        'clientToken'                 => 'ClientToken',
        'creditSpecification'         => 'CreditSpecification',
        'dataDisk'                    => 'DataDisk',
        'dedicatedHostId'             => 'DedicatedHostId',
        'deletionProtection'          => 'DeletionProtection',
        'deploymentSetGroupNo'        => 'DeploymentSetGroupNo',
        'deploymentSetId'             => 'DeploymentSetId',
        'description'                 => 'Description',
        'dryRun'                      => 'DryRun',
        'hostName'                    => 'HostName',
        'hostNames'                   => 'HostNames',
        'hpcClusterId'                => 'HpcClusterId',
        'httpEndpoint'                => 'HttpEndpoint',
        'httpPutResponseHopLimit'     => 'HttpPutResponseHopLimit',
        'httpTokens'                  => 'HttpTokens',
        'imageFamily'                 => 'ImageFamily',
        'imageId'                     => 'ImageId',
        'imageOptions'                => 'ImageOptions',
        'instanceChargeType'          => 'InstanceChargeType',
        'instanceName'                => 'InstanceName',
        'instanceType'                => 'InstanceType',
        'internetChargeType'          => 'InternetChargeType',
        'internetMaxBandwidthIn'      => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'     => 'InternetMaxBandwidthOut',
        'ioOptimized'                 => 'IoOptimized',
        'ipv6Address'                 => 'Ipv6Address',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'isp'                         => 'Isp',
        'keyPairName'                 => 'KeyPairName',
        'launchTemplateId'            => 'LaunchTemplateId',
        'launchTemplateName'          => 'LaunchTemplateName',
        'launchTemplateVersion'       => 'LaunchTemplateVersion',
        'minAmount'                   => 'MinAmount',
        'networkInterface'            => 'NetworkInterface',
        'networkInterfaceQueueNumber' => 'NetworkInterfaceQueueNumber',
        'networkOptions'              => 'NetworkOptions',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'passwordInherit'             => 'PasswordInherit',
        'period'                      => 'Period',
        'periodUnit'                  => 'PeriodUnit',
        'privateDnsNameOptions'       => 'PrivateDnsNameOptions',
        'privateIpAddress'            => 'PrivateIpAddress',
        'ramRoleName'                 => 'RamRoleName',
        'regionId'                    => 'RegionId',
        'resourceGroupId'             => 'ResourceGroupId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityEnhancementStrategy' => 'SecurityEnhancementStrategy',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'spotDuration'                => 'SpotDuration',
        'spotInterruptionBehavior'    => 'SpotInterruptionBehavior',
        'spotPriceLimit'              => 'SpotPriceLimit',
        'spotStrategy'                => 'SpotStrategy',
        'storageSetId'                => 'StorageSetId',
        'storageSetPartitionNumber'   => 'StorageSetPartitionNumber',
        'tag'                         => 'Tag',
        'tenancy'                     => 'Tenancy',
        'uniqueSuffix'                => 'UniqueSuffix',
        'userData'                    => 'UserData',
        'vSwitchId'                   => 'VSwitchId',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->cpuOptions) {
            $this->cpuOptions->validate();
        }
        if (null !== $this->hibernationOptions) {
            $this->hibernationOptions->validate();
        }
        if (null !== $this->privatePoolOptions) {
            $this->privatePoolOptions->validate();
        }
        if (null !== $this->schedulerOptions) {
            $this->schedulerOptions->validate();
        }
        if (null !== $this->securityOptions) {
            $this->securityOptions->validate();
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
        if (\is_array($this->hostNames)) {
            Model::validateArray($this->hostNames);
        }
        if (null !== $this->imageOptions) {
            $this->imageOptions->validate();
        }
        if (\is_array($this->ipv6Address)) {
            Model::validateArray($this->ipv6Address);
        }
        if (\is_array($this->networkInterface)) {
            Model::validateArray($this->networkInterface);
        }
        if (null !== $this->networkOptions) {
            $this->networkOptions->validate();
        }
        if (null !== $this->privateDnsNameOptions) {
            $this->privateDnsNameOptions->validate();
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toArray($noStream) : $this->cpuOptions;
        }

        if (null !== $this->hibernationOptions) {
            $res['HibernationOptions'] = null !== $this->hibernationOptions ? $this->hibernationOptions->toArray($noStream) : $this->hibernationOptions;
        }

        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toArray($noStream) : $this->privatePoolOptions;
        }

        if (null !== $this->schedulerOptions) {
            $res['SchedulerOptions'] = null !== $this->schedulerOptions ? $this->schedulerOptions->toArray($noStream) : $this->schedulerOptions;
        }

        if (null !== $this->securityOptions) {
            $res['SecurityOptions'] = null !== $this->securityOptions ? $this->securityOptions->toArray($noStream) : $this->securityOptions;
        }

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->affinity) {
            $res['Affinity'] = $this->affinity;
        }

        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->arn) {
            if (\is_array($this->arn)) {
                $res['Arn'] = [];
                $n1         = 0;
                foreach ($this->arn as $item1) {
                    $res['Arn'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
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

        if (null !== $this->hostNames) {
            if (\is_array($this->hostNames)) {
                $res['HostNames'] = [];
                $n1               = 0;
                foreach ($this->hostNames as $item1) {
                    $res['HostNames'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toArray($noStream) : $this->imageOptions;
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

        if (null !== $this->ipv6Address) {
            if (\is_array($this->ipv6Address)) {
                $res['Ipv6Address'] = [];
                $n1                 = 0;
                foreach ($this->ipv6Address as $item1) {
                    $res['Ipv6Address'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateName) {
            $res['LaunchTemplateName'] = $this->launchTemplateName;
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->minAmount) {
            $res['MinAmount'] = $this->minAmount;
        }

        if (null !== $this->networkInterface) {
            if (\is_array($this->networkInterface)) {
                $res['NetworkInterface'] = [];
                $n1                      = 0;
                foreach ($this->networkInterface as $item1) {
                    $res['NetworkInterface'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->networkInterfaceQueueNumber) {
            $res['NetworkInterfaceQueueNumber'] = $this->networkInterfaceQueueNumber;
        }

        if (null !== $this->networkOptions) {
            $res['NetworkOptions'] = null !== $this->networkOptions ? $this->networkOptions->toArray($noStream) : $this->networkOptions;
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

        if (null !== $this->privateDnsNameOptions) {
            $res['PrivateDnsNameOptions'] = null !== $this->privateDnsNameOptions ? $this->privateDnsNameOptions->toArray($noStream) : $this->privateDnsNameOptions;
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

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1                      = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1++] = $item1;
                }
            }
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
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenancy) {
            $res['Tenancy'] = $this->tenancy;
        }

        if (null !== $this->uniqueSuffix) {
            $res['UniqueSuffix'] = $this->uniqueSuffix;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }

        if (isset($map['HibernationOptions'])) {
            $model->hibernationOptions = hibernationOptions::fromMap($map['HibernationOptions']);
        }

        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }

        if (isset($map['SchedulerOptions'])) {
            $model->schedulerOptions = schedulerOptions::fromMap($map['SchedulerOptions']);
        }

        if (isset($map['SecurityOptions'])) {
            $model->securityOptions = securityOptions::fromMap($map['SecurityOptions']);
        }

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['Affinity'])) {
            $model->affinity = $map['Affinity'];
        }

        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['Arn'])) {
            if (!empty($map['Arn'])) {
                $model->arn = [];
                $n1         = 0;
                foreach ($map['Arn'] as $item1) {
                    $model->arn[$n1++] = arn::fromMap($item1);
                }
            }
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
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

        if (isset($map['HostNames'])) {
            if (!empty($map['HostNames'])) {
                $model->hostNames = [];
                $n1               = 0;
                foreach ($map['HostNames'] as $item1) {
                    $model->hostNames[$n1++] = $item1;
                }
            }
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

        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
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

        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = [];
                $n1                 = 0;
                foreach ($map['Ipv6Address'] as $item1) {
                    $model->ipv6Address[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateName'])) {
            $model->launchTemplateName = $map['LaunchTemplateName'];
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['MinAmount'])) {
            $model->minAmount = $map['MinAmount'];
        }

        if (isset($map['NetworkInterface'])) {
            if (!empty($map['NetworkInterface'])) {
                $model->networkInterface = [];
                $n1                      = 0;
                foreach ($map['NetworkInterface'] as $item1) {
                    $model->networkInterface[$n1++] = networkInterface::fromMap($item1);
                }
            }
        }

        if (isset($map['NetworkInterfaceQueueNumber'])) {
            $model->networkInterfaceQueueNumber = $map['NetworkInterfaceQueueNumber'];
        }

        if (isset($map['NetworkOptions'])) {
            $model->networkOptions = networkOptions::fromMap($map['NetworkOptions']);
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

        if (isset($map['PrivateDnsNameOptions'])) {
            $model->privateDnsNameOptions = privateDnsNameOptions::fromMap($map['PrivateDnsNameOptions']);
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

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1                      = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1++] = $item1;
                }
            }
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['Tenancy'])) {
            $model->tenancy = $map['Tenancy'];
        }

        if (isset($map['UniqueSuffix'])) {
            $model->uniqueSuffix = $map['UniqueSuffix'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
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
