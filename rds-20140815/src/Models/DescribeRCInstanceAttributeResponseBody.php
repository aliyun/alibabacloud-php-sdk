<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\dataDisks;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\dedicatedHostAttribute;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\eipAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\innerIpAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\operationLocks;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\publicIpAddress;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\securityGroupIds;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\systemDisk;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\tags;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceAttributeResponseBody\vpcAttributes;

class DescribeRCInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $cpu;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $creditSpecification;
    /**
     * @var dataDisks
     */
    public $dataDisks;
    /**
     * @var string
     */
    public $dbType;
    /**
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;
    /**
     * @var string
     */
    public $deploymentSetId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $diskType;
    /**
     * @var string
     */
    public $ecsInstanceType;
    /**
     * @var eipAddress
     */
    public $eipAddress;
    /**
     * @var bool
     */
    public $enableJumboFrame;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var string
     */
    public $hostName;
    /**
     * @var string
     */
    public $hostType;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var innerIpAddress
     */
    public $innerIpAddress;
    /**
     * @var string
     */
    public $instanceChargeType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $instanceNetworkType;
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
     * @var int
     */
    public $memory;
    /**
     * @var operationLocks
     */
    public $operationLocks;
    /**
     * @var publicIpAddress
     */
    public $publicIpAddress;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;
    /**
     * @var string
     */
    public $serialNumber;
    /**
     * @var string
     */
    public $spotStrategy;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $stoppedMode;
    /**
     * @var systemDisk
     */
    public $systemDisk;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var string
     */
    public $vlanId;
    /**
     * @var vpcAttributes
     */
    public $vpcAttributes;
    /**
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
        'systemDisk'              => 'SystemDisk',
        'tags'                    => 'Tags',
        'vlanId'                  => 'VlanId',
        'vpcAttributes'           => 'VpcAttributes',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->dataDisks) {
            $this->dataDisks->validate();
        }
        if (null !== $this->dedicatedHostAttribute) {
            $this->dedicatedHostAttribute->validate();
        }
        if (null !== $this->eipAddress) {
            $this->eipAddress->validate();
        }
        if (null !== $this->innerIpAddress) {
            $this->innerIpAddress->validate();
        }
        if (null !== $this->operationLocks) {
            $this->operationLocks->validate();
        }
        if (null !== $this->publicIpAddress) {
            $this->publicIpAddress->validate();
        }
        if (null !== $this->securityGroupIds) {
            $this->securityGroupIds->validate();
        }
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->vpcAttributes) {
            $this->vpcAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['DataDisks'] = null !== $this->dataDisks ? $this->dataDisks->toArray($noStream) : $this->dataDisks;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toArray($noStream) : $this->dedicatedHostAttribute;
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
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toArray($noStream) : $this->eipAddress;
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
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toArray($noStream) : $this->innerIpAddress;
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
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toArray($noStream) : $this->operationLocks;
        }

        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toArray($noStream) : $this->publicIpAddress;
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
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toArray($noStream) : $this->securityGroupIds;
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

        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }

        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toArray($noStream) : $this->vpcAttributes;
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

        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
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
