<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\dataDisks;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\dedicatedHostAttribute;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\eipAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\innerIpAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\operationLocks;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\publicIpAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\vpcAttributes;
use AlibabaCloud\Tea\Model;

class DescribeRCInstanceAttributeResponseBody extends Model
{
    /**
     * @description The ID of the cluster to which the instance belongs.
     *
     * >  This parameter will be deprecated. We recommend that you use other parameters to ensure compatibility.
     * @example None
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of CPU cores.
     *
     * @example 4
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC.
     *
     * @example 2024-04-22T06:52:23Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The performance mode of the burstable instance.
     *
     * @example None
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The details of the data disk.
     *
     * @var dataDisks
     */
    public $dataDisks;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @description The attributes of the dedicated hosts.
     *
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @description The ID of the deployment set.
     *
     * @example ds-uf6c8qerk019bj1l****
     *
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The instance description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The Elastic Compute Service (ECS) instance family.
     *
     * @example ecs.g6.2xlarge
     *
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @description The elastic IP address (EIP) associated with the instance.
     *
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @description Indicates whether the Jumbo Frame feature is enabled for the instance. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description The expiration time. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mmZ format. The time is displayed in UTC.
     *
     * @example 2024-08-10T00:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The instance hostname.
     *
     * @example iZ2zej1n3cin51rlmby****
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The storage type of the host. Valid values:
     *
     *   **dhg_cloud_ssd**: ESSD
     *   **dhg_local_ssd**: local SSD
     *
     * @example dhg_cloud_ssd
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The image ID of the instance.
     *
     * @example m-2oqiu973jwcxe****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The private IP addresses of the instance in the classic network.
     *
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance ID.
     *
     * @example rc-dh2jf9n6j4s14926****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The network type. Valid values:
     *
     *   **classic**
     *   **vpc**
     *
     * @example vpc
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The instance type of the instance.
     *
     * @example mysql.x4.xlarge.6cm
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByTraffic**: pay-by-data-transfer
     *
     * >  If the **pay-by-traffic** billing method is used for network usage, the maximum inbound and outbound bandwidths are used as the upper limits of bandwidths instead of guaranteed performance specifications. In scenarios in which demands exceed resource supplies, the maximum bandwidths may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum inbound bandwidth from the Internet. Unit: Mbit/s.
     *
     * @example 1
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The maximum outbound bandwidth to the Internet. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description Indicates whether the instance is I/O optimized.
     *
     *   **optimized**: The instance is I/O optimized.
     *   **none**: The instance is not I/O optimized.
     *
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The name of the key pair.
     *
     * @example test_01
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The memory capacity of the instance. Unit: MiB.
     *
     * @example 8192
     *
     * @var int
     */
    public $memory;

    /**
     * @description The reasons why the instance is locked.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The public IP address of the instance.
     *
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example EA2D4F34-01A7-46EB-A339-D80882135206
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security groups.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The serial number of the instance.
     *
     * @example b076f6ff-46d1-4234-a608-4e951ed6****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The instance status. Valid values:
     *
     *   **Pending**
     *   **Running**
     *   **Starting**
     *   **Stopping**
     *   **Stopped**
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the billing of the instance continues after the instance is stopped. Valid values:
     *
     *   **KeepCharging**: The billing of the instance continues after the instance is stopped, and resources are retained for the instance.
     *   **StopCharging**: The billing of the instance stops after the instance is stopped. After the instance is stopped, resources such as CPU cores, memory resources, and public IP address are released. The instance may be unable to restart if some required resources are out of stock in the current region.
     *   **Not-applicable**: The No Fees for Stopped Instances feature is not supported for the instance.
     *
     * @example Not-applicable
     *
     * @var string
     */
    public $stoppedMode;

    /**
     * @description The virtual LAN (VLAN) ID of the instance.
     *
     * >  This parameter will be deprecated. We recommend that you use other parameters to ensure compatibility.
     * @example None
     *
     * @var string
     */
    public $vlanId;

    /**
     * @description The virtual private cloud (VPC) attributes of the instance.
     *
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'               => 'ClusterId',
        'cpu'                     => 'Cpu',
        'creationTime'            => 'CreationTime',
        'creditSpecification'     => 'CreditSpecification',
        'dataDisks'               => 'DataDisks',
        'dbType'                  => 'DbType',
        'dedicatedHostAttribute'  => 'DedicatedHostAttribute',
        'deploymentSetId'         => 'DeploymentSetId',
        'description'             => 'Description',
        'diskType'                => 'DiskType',
        'ecsInstanceType'         => 'EcsInstanceType',
        'eipAddress'              => 'EipAddress',
        'enableJumboFrame'        => 'EnableJumboFrame',
        'expiredTime'             => 'ExpiredTime',
        'hostName'                => 'HostName',
        'hostType'                => 'HostType',
        'imageId'                 => 'ImageId',
        'innerIpAddress'          => 'InnerIpAddress',
        'instanceChargeType'      => 'InstanceChargeType',
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'instanceType'            => 'InstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'ioOptimized'             => 'IoOptimized',
        'keyPairName'             => 'KeyPairName',
        'memory'                  => 'Memory',
        'operationLocks'          => 'OperationLocks',
        'publicIpAddress'         => 'PublicIpAddress',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'securityGroupIds'        => 'SecurityGroupIds',
        'serialNumber'            => 'SerialNumber',
        'spotStrategy'            => 'SpotStrategy',
        'status'                  => 'Status',
        'stoppedMode'             => 'StoppedMode',
        'vlanId'                  => 'VlanId',
        'vpcAttributes'           => 'VpcAttributes',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toMap() : null;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->ecsInstanceType) {
            $res['EcsInstanceType'] = $this->ecsInstanceType;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
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
     * @return DescribeRCInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }
        if (isset($map['DataDisks'])) {
            $model->dataDisks = dataDisks::fromMap($map['DataDisks']);
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['EcsInstanceType'])) {
            $model->ecsInstanceType = $map['EcsInstanceType'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
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
