<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\innerIpAddress;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\networkAttributes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\privateIpAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\publicIpAddress;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\publicIpAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\securityGroupIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\systemDisk;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @example 2019-07-26T06:40:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var dataDisk
     */
    public $dataDisk;

    /**
     * @example 71680
     *
     * @var int
     */
    public $disk;

    /**
     * @example cn-hangzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example 2119-07-13T02:38:57Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @example m-****
     *
     * @var string
     */
    public $imageId;

    /**
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @example i-instanc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example i-5itef0f28t17bcdw9deu6meub
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example EnsService
     *
     * @var string
     */
    public $instanceResourceType;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @example 40
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @example 100
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @example 2048
     *
     * @var int
     */
    public $memory;

    /**
     * @description Schema of Response
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @example centos 6.8 x86_64
     *
     * @var string
     */
    public $OSName;

    /**
     * @var privateIpAddresses
     */
    public $privateIpAddresses;

    /**
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $specName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Schema of Response
     *
     * @var systemDisk
     */
    public $systemDisk;
    protected $_name = [
        'cpu'                     => 'Cpu',
        'creationTime'            => 'CreationTime',
        'dataDisk'                => 'DataDisk',
        'disk'                    => 'Disk',
        'ensRegionId'             => 'EnsRegionId',
        'expiredTime'             => 'ExpiredTime',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'innerIpAddress'          => 'InnerIpAddress',
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'instanceResourceType'    => 'InstanceResourceType',
        'instanceTypeFamily'      => 'InstanceTypeFamily',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'memory'                  => 'Memory',
        'networkAttributes'       => 'NetworkAttributes',
        'OSName'                  => 'OSName',
        'privateIpAddresses'      => 'PrivateIpAddresses',
        'publicIpAddress'         => 'PublicIpAddress',
        'publicIpAddresses'       => 'PublicIpAddresses',
        'securityGroupIds'        => 'SecurityGroupIds',
        'specName'                => 'SpecName',
        'status'                  => 'Status',
        'systemDisk'              => 'SystemDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = null !== $this->dataDisk ? $this->dataDisk->toMap() : null;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceResourceType) {
            $res['InstanceResourceType'] = $this->instanceResourceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->privateIpAddresses) {
            $res['PrivateIpAddresses'] = null !== $this->privateIpAddresses ? $this->privateIpAddresses->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataDisk'])) {
            $model->dataDisk = dataDisk::fromMap($map['DataDisk']);
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = innerIpAddress::fromMap($map['InnerIpAddress']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceResourceType'])) {
            $model->instanceResourceType = $map['InstanceResourceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['PrivateIpAddresses'])) {
            $model->privateIpAddresses = privateIpAddresses::fromMap($map['PrivateIpAddresses']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        return $model;
    }
}
