<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\dedicatedHostAttribute;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\eipAddress;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody\vpcAttributes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string[]
     */
    public $publicIpAddress;

    /**
     * @var string[]
     */
    public $innerIpAddress;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var eipAddress
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $vlanId;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $stoppedMode;

    /**
     * @var dedicatedHostAttribute
     */
    public $dedicatedHostAttribute;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var vpcAttributes
     */
    public $vpcAttributes;

    /**
     * @var operationLocks[]
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $creditSpecification;
    protected $_name = [
        'description'             => 'Description',
        'memory'                  => 'Memory',
        'instanceChargeType'      => 'InstanceChargeType',
        'cpu'                     => 'Cpu',
        'instanceNetworkType'     => 'InstanceNetworkType',
        'publicIpAddress'         => 'PublicIpAddress',
        'innerIpAddress'          => 'InnerIpAddress',
        'expiredTime'             => 'ExpiredTime',
        'imageId'                 => 'ImageId',
        'eipAddress'              => 'EipAddress',
        'instanceType'            => 'InstanceType',
        'vlanId'                  => 'VlanId',
        'hostName'                => 'HostName',
        'status'                  => 'Status',
        'ioOptimized'             => 'IoOptimized',
        'requestId'               => 'RequestId',
        'zoneId'                  => 'ZoneId',
        'clusterId'               => 'ClusterId',
        'instanceId'              => 'InstanceId',
        'stoppedMode'             => 'StoppedMode',
        'dedicatedHostAttribute'  => 'DedicatedHostAttribute',
        'securityGroupIds'        => 'SecurityGroupIds',
        'vpcAttributes'           => 'VpcAttributes',
        'operationLocks'          => 'OperationLocks',
        'internetChargeType'      => 'InternetChargeType',
        'instanceName'            => 'InstanceName',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'serialNumber'            => 'SerialNumber',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'creationTime'            => 'CreationTime',
        'regionId'                => 'RegionId',
        'creditSpecification'     => 'CreditSpecification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = $this->innerIpAddress;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = null !== $this->eipAddress ? $this->eipAddress->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->vlanId) {
            $res['VlanId'] = $this->vlanId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->dedicatedHostAttribute) {
            $res['DedicatedHostAttribute'] = null !== $this->dedicatedHostAttribute ? $this->dedicatedHostAttribute->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->vpcAttributes) {
            $res['VpcAttributes'] = null !== $this->vpcAttributes ? $this->vpcAttributes->toMap() : null;
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
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PublicIpAddress'])) {
            if (!empty($map['PublicIpAddress'])) {
                $model->publicIpAddress = $map['PublicIpAddress'];
            }
        }
        if (isset($map['InnerIpAddress'])) {
            if (!empty($map['InnerIpAddress'])) {
                $model->innerIpAddress = $map['InnerIpAddress'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = eipAddress::fromMap($map['EipAddress']);
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['VlanId'])) {
            $model->vlanId = $map['VlanId'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['DedicatedHostAttribute'])) {
            $model->dedicatedHostAttribute = dedicatedHostAttribute::fromMap($map['DedicatedHostAttribute']);
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['VpcAttributes'])) {
            $model->vpcAttributes = vpcAttributes::fromMap($map['VpcAttributes']);
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
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }

        return $model;
    }
}
