<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\dedicatedHostAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\dedicatedInstanceAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\ecsCapacityReservationAttr;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\eipAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\hibernationOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\imageOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\innerIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\metadataOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\networkInterfaces;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\publicIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\rdmaIpAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\securityGroupIds;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\tags;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance\vpcAttributes;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The time when to automatically release the pay-as-you-go instance.
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description The ID of the cluster to which the instance belongs.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example c-bp67acfmxazb4p****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of vCPUs.
     *
     * @example 8
     *
     * @var int
     */
    public $cpu;

    /**
     * @description Details about the CPU options.
     *
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](~~25696~~).
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: standard mode. For more information, see the "Standard mode" section in [Overview](~~59977~~).
     *   Unlimited: unlimited mode. For more information, see the "Unlimited mode" section in [Overview](~~59977~~).
     *
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description Details about the dedicated host. It is an array that consists of the DedicatedHostClusterId, DedicatedHostId, and DedicatedHostName parameters.
     *
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @description The attributes of the instance on the dedicated host.
     *
     * @var dedicatedInstanceAttribute
     */
    public $dedicatedInstanceAttribute;

    /**
     * @description The release protection attribute of the instance. This parameter indicates whether you can use the ECS console or call the DeleteInstance operation to release the instance.
     *
     *   true: Release protection is enabled for the instance.
     *   false: Release protection is disabled for the instance.
     *
     * >  This parameter is applicable only to pay-as-you-go instances. It can protect instances against manual releases, but not against automatic releases.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The number of the deployment set group to which the instance belongs in a deployment set.
     *
     * @example 1
     *
     * @var int
     */
    public $deploymentSetGroupNo;

    /**
     * @description The ID of the deployment set in which the instance is deployed.
     *
     * @example ds-bp67acfmxazb4p****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The description of the instance.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether data disks can be attached to the instance.
     *
     * @example true
     *
     * @var bool
     */
    public $deviceAvailable;

    /**
     * @description Details about the capacity reservation related to the instance.
     *
     * @var ecsCapacityReservationAttr
     */
    public $ecsCapacityReservationAttr;

    /**
     * @description Details about the EIP associated with the instance.
     *
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @description The time when the instance expires. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](~~25696~~).
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The number of GPUs for the instance type.
     *
     * @example 4
     *
     * @var int
     */
    public $GPUAmount;

    /**
     * @description The category of GPUs for the instance type.
     *
     * @example NVIDIA V100
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description >  This parameter is in invitational preview and is unavailable for general users.
     *
     * @var hibernationOptions
     */
    public $hibernationOptions;

    /**
     * @description The hostname of the instance.
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the HPC cluster to which the instance belongs.
     *
     * @example hpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $hpcClusterId;

    /**
     * @description >  This parameter is in invitational preview and is unavailable for general users.
     *
     * @example null
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The ID of the image that the instance is running.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Details about the image options.
     *
     * @var imageOptions
     */
    public $imageOptions;

    /**
     * @description The internal IP addresses of the instance located in the classic network.
     *
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example InstanceNameTest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   classic
     *   vpc
     *
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family of the instance.
     *
     * @example ecs.g5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByTraffic: pay-by-traffic
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound public bandwidth. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Indicates whether the instance is I/O optimized.
     *
     * @example true
     *
     * @var bool
     */
    public $ioOptimized;

    /**
     * @description The name of the key pair bound to the instance.
     *
     * @example testKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The number of local disks attached to the instance.
     *
     * @example 2
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description The capacity of local disks attached to the instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description The memory size of the instance. Unit: MiB.
     *
     * @example 16384
     *
     * @var int
     */
    public $memory;

    /**
     * @description Details about the metadata options.
     *
     * @var metadataOptions
     */
    public $metadataOptions;

    /**
     * @description Details about the ENIs bound to the instance.
     *
     * @var networkInterfaces
     */
    public $networkInterfaces;

    /**
     * @description The name of the operating system of the instance.
     *
     * @example CentOS  7.4 64 位
     *
     * @var string
     */
    public $OSName;

    /**
     * @description The English name of the operating system of the instance.
     *
     * @example CentOS  7.4 64 bit
     *
     * @var string
     */
    public $OSNameEn;

    /**
     * @description The type of the operating system of the instance. Valid values:
     *
     *   windows
     *   linux
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The reasons why the instance was locked.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The public IP addresses of the instance.
     *
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @description The RDMA IP addresses of the HPC instance.
     *
     * @var rdmaIpAddress
     */
    public $rdmaIpAddress;

    /**
     * @description Indicates whether the instance can be recycled.
     *
     * @example false
     *
     * @var bool
     */
    public $recyclable;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description >  The parameter is discontinued.
     *
     * @example month
     *
     * @var string
     */
    public $saleCycle;

    /**
     * @description The IDs of the security groups to which the instance belongs.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The serial number of the instance.
     *
     * @example 51d1353b-22bf-4567-a176-8b3e12e4****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6.
     *
     *   Protection periods of 2, 3, 4, 5, and 6 hours are in invitational preview. If you want to set this parameter to one of these values, submit a ticket.
     *   A value of 0 indicates that the preemptible instance has no protection period.
     *
     * >  This parameter is returned when the SpotStrategy parameter is set to SpotWithPriceLimit or SpotAsPriceGo.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The maximum hourly price of the instance. It can be accurate to three decimal places. This parameter is valid only when the SpotStrategy parameter is set to SpotWithPriceLimit.
     *
     * @example 0.98
     *
     * @var float
     */
    public $spotPriceLimit;

    /**
     * @description The bidding policy for the pay-as-you-go instance. Valid values:
     *
     *   NoSpot: The instance is a regular pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price is automatically used as the bid price. The market price can be up to the pay-as-you-go price.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The time when the instance was last started. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC. For more information, see [ISO 8601](~~25696~~).
     *
     * @example 2017-12-10T04:04Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the instance continues to be billed after it is stopped. Valid values:
     *
     *   KeepCharging: The instance is stopped in standard mode. The billing of the instance continues after the instance is stopped, and resources are retained for the instance.
     *   StopCharging: The instance is stopped in economical mode. The billing of some resources of the instance stops after the instance is stopped. When the instance is stopped, its resources such as vCPUs, memory, and public IP address are released. The instance may be unable to start again if some required resources are out of stock in the current region.
     *   Not-applicable: The instance does not support economical mode.
     *
     * @example KeepCharging
     *
     * @var string
     */
    public $stoppedMode;

    /**
     * @description The tags of the instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The virtual LAN (VLAN) ID of the instance.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example 10
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description The VPC attributes of the instance.
     *
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoReleaseTime'            => 'AutoReleaseTime',
        'clusterId'                  => 'ClusterId',
        'cpu'                        => 'Cpu',
        'cpuOptions'                 => 'CpuOptions',
        'creationTime'               => 'CreationTime',
        'creditSpecification'        => 'CreditSpecification',
        'dedicatedHostAttribute'     => 'DedicatedHostAttribute',
        'dedicatedInstanceAttribute' => 'DedicatedInstanceAttribute',
        'deletionProtection'         => 'DeletionProtection',
        'deploymentSetGroupNo'       => 'DeploymentSetGroupNo',
        'deploymentSetId'            => 'DeploymentSetId',
        'description'                => 'Description',
        'deviceAvailable'            => 'DeviceAvailable',
        'ecsCapacityReservationAttr' => 'EcsCapacityReservationAttr',
        'eipAddress'                 => 'EipAddress',
        'expiredTime'                => 'ExpiredTime',
        'GPUAmount'                  => 'GPUAmount',
        'GPUSpec'                    => 'GPUSpec',
        'hibernationOptions'         => 'HibernationOptions',
        'hostName'                   => 'HostName',
        'hpcClusterId'               => 'HpcClusterId',
        'ISP'                        => 'ISP',
        'imageId'                    => 'ImageId',
        'imageOptions'               => 'ImageOptions',
        'innerIpAddress'             => 'InnerIpAddress',
        'instanceChargeType'         => 'InstanceChargeType',
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'instanceNetworkType'        => 'InstanceNetworkType',
        'instanceType'               => 'InstanceType',
        'instanceTypeFamily'         => 'InstanceTypeFamily',
        'internetChargeType'         => 'InternetChargeType',
        'internetMaxBandwidthIn'     => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut'    => 'InternetMaxBandwidthOut',
        'ioOptimized'                => 'IoOptimized',
        'keyPairName'                => 'KeyPairName',
        'localStorageAmount'         => 'LocalStorageAmount',
        'localStorageCapacity'       => 'LocalStorageCapacity',
        'memory'                     => 'Memory',
        'metadataOptions'            => 'MetadataOptions',
        'networkInterfaces'          => 'NetworkInterfaces',
        'OSName'                     => 'OSName',
        'OSNameEn'                   => 'OSNameEn',
        'OSType'                     => 'OSType',
        'operationLocks'             => 'OperationLocks',
        'publicIpAddress'            => 'PublicIpAddress',
        'rdmaIpAddress'              => 'RdmaIpAddress',
        'recyclable'                 => 'Recyclable',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'saleCycle'                  => 'SaleCycle',
        'securityGroupIds'           => 'SecurityGroupIds',
        'serialNumber'               => 'SerialNumber',
        'spotDuration'               => 'SpotDuration',
        'spotPriceLimit'             => 'SpotPriceLimit',
        'spotStrategy'               => 'SpotStrategy',
        'startTime'                  => 'StartTime',
        'status'                     => 'Status',
        'stoppedMode'                => 'StoppedMode',
        'tags'                       => 'Tags',
        'vlanId'                     => 'VlanId',
        'vpcAttributes'              => 'VpcAttributes',
        'zoneId'                     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->dedicatedInstanceAttribute) {
            $res['DedicatedInstanceAttribute'] = null !== $this->dedicatedInstanceAttribute ? $this->dedicatedInstanceAttribute->toMap() : null;
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
        if (null !== $this->deviceAvailable) {
            $res['DeviceAvailable'] = $this->deviceAvailable;
        }
        if (null !== $this->ecsCapacityReservationAttr) {
            $res['EcsCapacityReservationAttr'] = null !== $this->ecsCapacityReservationAttr ? $this->ecsCapacityReservationAttr->toMap() : null;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->hibernationOptions) {
            $res['HibernationOptions'] = null !== $this->hibernationOptions ? $this->hibernationOptions->toMap() : null;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hpcClusterId) {
            $res['HpcClusterId'] = $this->hpcClusterId;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOptions) {
            $res['ImageOptions'] = null !== $this->imageOptions ? $this->imageOptions->toMap() : null;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toMap() : null;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
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
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->metadataOptions) {
            $res['MetadataOptions'] = null !== $this->metadataOptions ? $this->metadataOptions->toMap() : null;
        }
        if (null !== $this->networkInterfaces) {
            $res['NetworkInterfaces'] = null !== $this->networkInterfaces ? $this->networkInterfaces->toMap() : null;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->OSNameEn) {
            $res['OSNameEn'] = $this->OSNameEn;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
        }
        if (null !== $this->rdmaIpAddress) {
            $res['RdmaIpAddress'] = null !== $this->rdmaIpAddress ? $this->rdmaIpAddress->toMap() : null;
        }
        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['DedicatedInstanceAttribute'])) {
            $model->dedicatedInstanceAttribute = dedicatedInstanceAttribute::fromMap($map['DedicatedInstanceAttribute']);
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
        if (isset($map['DeviceAvailable'])) {
            $model->deviceAvailable = $map['DeviceAvailable'];
        }
        if (isset($map['EcsCapacityReservationAttr'])) {
            $model->ecsCapacityReservationAttr = ecsCapacityReservationAttr::fromMap($map['EcsCapacityReservationAttr']);
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['HibernationOptions'])) {
            $model->hibernationOptions = hibernationOptions::fromMap($map['HibernationOptions']);
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HpcClusterId'])) {
            $model->hpcClusterId = $map['HpcClusterId'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOptions'])) {
            $model->imageOptions = imageOptions::fromMap($map['ImageOptions']);
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = innerIpAddress::fromMap($map['InnerIpAddress']);
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
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
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MetadataOptions'])) {
            $model->metadataOptions = metadataOptions::fromMap($map['MetadataOptions']);
        }
        if (isset($map['NetworkInterfaces'])) {
            $model->networkInterfaces = networkInterfaces::fromMap($map['NetworkInterfaces']);
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['OSNameEn'])) {
            $model->OSNameEn = $map['OSNameEn'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }
        if (isset($map['RdmaIpAddress'])) {
            $model->rdmaIpAddress = rdmaIpAddress::fromMap($map['RdmaIpAddress']);
        }
        if (isset($map['Recyclable'])) {
            $model->recyclable = $map['Recyclable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
