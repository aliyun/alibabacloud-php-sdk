<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\dedicatedHostAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\dedicatedInstanceAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\ecsCapacityReservationAttr;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\eipAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\metadataOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\vpcAttributes;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @var operationLocks[]
     */
    public $operationLocks;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var metadataOptions
     */
    public $metadataOptions;

    /**
     * @var string
     */
    public $saleCycle;

    /**
     * @var string[]
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var int
     */
    public $spotDuration;

    /**
     * @var string
     */
    public $OSNameEn;

    /**
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var int
     */
    public $deploymentSetGroupNo;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var dedicatedInstanceAttribute
     */
    public $dedicatedInstanceAttribute;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @var string[]
     */
    public $innerIpAddress;

    /**
     * @var string
     */
    public $stoppedMode;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $recyclable;

    /**
     * @var string
     */
    public $creditSpecification;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hpcClusterId;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $vlanId;

    /**
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var ecsCapacityReservationAttr
     */
    public $ecsCapacityReservationAttr;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string[]
     */
    public $rdmaIpAddress;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var networkInterfaces[]
     */
    public $networkInterfaces;
    protected $_name = [
        'creationTime'               => 'CreationTime',
        'serialNumber'               => 'SerialNumber',
        'dedicatedHostAttribute'     => 'DedicatedHostAttribute',
        'operationLocks'             => 'OperationLocks',
        'tags'                       => 'Tags',
        'metadataOptions'            => 'MetadataOptions',
        'saleCycle'                  => 'SaleCycle',
        'publicIpAddress'            => 'PublicIpAddress',
        'spotStrategy'               => 'SpotStrategy',
        'deviceAvailable'            => 'DeviceAvailable',
        'eipAddress'                 => 'EipAddress',
        'instanceName'               => 'InstanceName',
        'instanceNetworkType'        => 'InstanceNetworkType',
        'spotDuration'               => 'SpotDuration',
        'OSNameEn'                   => 'OSNameEn',
        'spotPriceLimit'             => 'SpotPriceLimit',
        'OSName'                     => 'OSName',
        'imageId'                    => 'ImageId',
        'deploymentSetGroupNo'       => 'DeploymentSetGroupNo',
        'clusterId'                  => 'ClusterId',
        'dedicatedInstanceAttribute' => 'DedicatedInstanceAttribute',
        'GPUSpec'                    => 'GPUSpec',
        'autoReleaseTime'            => 'AutoReleaseTime',
        'innerIpAddress'             => 'InnerIpAddress',
        'stoppedMode'                => 'StoppedMode',
        'GPUAmount'                  => 'GPUAmount',
        'hostName'                   => 'HostName',
        'instanceId'                 => 'InstanceId',
        'instanceType'               => 'InstanceType',
        'instanceChargeType'         => 'InstanceChargeType',
        'startTime'                  => 'StartTime',
        'internetChargeType'         => 'InternetChargeType',
        'zoneId'                     => 'ZoneId',
        'recyclable'                 => 'Recyclable',
        'creditSpecification'        => 'CreditSpecification',
        'OSType'                     => 'OSType',
        'status'                     => 'Status',
        'deploymentSetId'            => 'DeploymentSetId',
        'keyPairName'                => 'KeyPairName',
        'cpuOptions'                 => 'CpuOptions',
        'localStorageCapacity'       => 'LocalStorageCapacity',
        'description'                => 'Description',
        'hpcClusterId'               => 'HpcClusterId',
        'memory'                     => 'Memory',
        'vlanId'                     => 'VlanId',
        'vpcAttributes'              => 'VpcAttributes',
        'deletionProtection'         => 'DeletionProtection',
        'ecsCapacityReservationAttr' => 'EcsCapacityReservationAttr',
        'internetMaxBandwidthIn'     => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'    => 'InternetMaxBandwidthOut',
        'securityGroupIds'           => 'SecurityGroupIds',
        'regionId'                   => 'RegionId',
        'ioOptimized'                => 'IoOptimized',
        'cpu'                        => 'Cpu',
        'rdmaIpAddress'              => 'RdmaIpAddress',
        'expiredTime'                => 'ExpiredTime',
        'localStorageAmount'         => 'LocalStorageAmount',
        'resourceGroupId'            => 'ResourceGroupId',
        'instanceTypeFamily'         => 'InstanceTypeFamily',
        'ISP'                        => 'ISP',
        'networkInterfaces'          => 'NetworkInterfaces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = [];
            if (null !== $this->operationLocks && \is_array($this->operationLocks)) {
                $n = 0;
                foreach ($this->operationLocks as $item) {
                    $res['OperationLocks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->metadataOptions) {
            $res['MetadataOptions'] = null !== $this->metadataOptions ? $this->metadataOptions->toMap() : null;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->deviceAvailable) {
            $res['DeviceAvailable'] = $this->deviceAvailable;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->deploymentSetGroupNo) {
            $res['DeploymentSetGroupNo'] = $this->deploymentSetGroupNo;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dedicatedInstanceAttribute) {
            $res['DedicatedInstanceAttribute'] = null !== $this->dedicatedInstanceAttribute ? $this->dedicatedInstanceAttribute->toMap() : null;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toMap() : null;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->ecsCapacityReservationAttr) {
            $res['EcsCapacityReservationAttr'] = null !== $this->ecsCapacityReservationAttr ? $this->ecsCapacityReservationAttr->toMap() : null;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->rdmaIpAddress) {
            $res['RdmaIpAddress'] = $this->rdmaIpAddress;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
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
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['OperationLocks'])) {
            if (!empty($map['OperationLocks'])) {
                $model->operationLocks = [];
                $n                     = 0;
                foreach ($map['OperationLocks'] as $item) {
                    $model->operationLocks[$n++] = null !== $item ? operationLocks::fromMap($item) : $item;
                }
            }
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
        if (isset($map['MetadataOptions'])) {
            $model->metadataOptions = metadataOptions::fromMap($map['MetadataOptions']);
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['PublicIpAddress'])) {
            if (!empty($map['PublicIpAddress'])) {
                $model->publicIpAddress = $map['PublicIpAddress'];
            }
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['DeviceAvailable'])) {
            $model->deviceAvailable = $map['DeviceAvailable'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['DeploymentSetGroupNo'])) {
            $model->deploymentSetGroupNo = $map['DeploymentSetGroupNo'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DedicatedInstanceAttribute'])) {
            $model->dedicatedInstanceAttribute = dedicatedInstanceAttribute::fromMap($map['DedicatedInstanceAttribute']);
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['InnerIpAddress'])) {
            if (!empty($map['InnerIpAddress'])) {
                $model->innerIpAddress = $map['InnerIpAddress'];
            }
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Recyclable'])) {
            $model->recyclable = $map['Recyclable'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EcsCapacityReservationAttr'])) {
            $model->ecsCapacityReservationAttr = ecsCapacityReservationAttr::fromMap($map['EcsCapacityReservationAttr']);
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['RdmaIpAddress'])) {
            if (!empty($map['RdmaIpAddress'])) {
                $model->rdmaIpAddress = $map['RdmaIpAddress'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
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
