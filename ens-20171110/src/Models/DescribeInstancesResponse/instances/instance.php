<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\dataDisk;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\innerIpAddress;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\privateIpAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\publicIpAddress;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\publicIpAddresses;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\securityGroupIds;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\systemDisk;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
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
    public $ensRegionId;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $disk;

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
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $instanceResourceType;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var dataDisk
     */
    public $dataDisk;

    /**
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @var privateIpAddresses
     */
    public $privateIpAddresses;

    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @var publicIpAddress
     */
    public $publicIpAddress;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'instanceName'            => 'InstanceName',
        'ensRegionId'             => 'EnsRegionId',
        'cpu'                     => 'Cpu',
        'memory'                  => 'Memory',
        'disk'                    => 'Disk',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'creationTime'            => 'CreationTime',
        'status'                  => 'Status',
        'hostName'                => 'HostName',
        'imageId'                 => 'ImageId',
        'expiredTime'             => 'ExpiredTime',
        'instanceResourceType'    => 'InstanceResourceType',
        'specName'                => 'SpecName',
        'OSName'                  => 'OSName',
        'dataDisk'                => 'DataDisk',
        'publicIpAddresses'       => 'PublicIpAddresses',
        'privateIpAddresses'      => 'PrivateIpAddresses',
        'systemDisk'              => 'SystemDisk',
        'securityGroupIds'        => 'SecurityGroupIds',
        'innerIpAddress'          => 'InnerIpAddress',
        'publicIpAddress'         => 'PublicIpAddress',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('disk', $this->disk, true);
        Model::validateRequired('internetMaxBandwidthIn', $this->internetMaxBandwidthIn, true);
        Model::validateRequired('internetMaxBandwidthOut', $this->internetMaxBandwidthOut, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('hostName', $this->hostName, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('instanceResourceType', $this->instanceResourceType, true);
        Model::validateRequired('specName', $this->specName, true);
        Model::validateRequired('OSName', $this->OSName, true);
        Model::validateRequired('dataDisk', $this->dataDisk, true);
        Model::validateRequired('publicIpAddresses', $this->publicIpAddresses, true);
        Model::validateRequired('privateIpAddresses', $this->privateIpAddresses, true);
        Model::validateRequired('systemDisk', $this->systemDisk, true);
        Model::validateRequired('securityGroupIds', $this->securityGroupIds, true);
        Model::validateRequired('innerIpAddress', $this->innerIpAddress, true);
        Model::validateRequired('publicIpAddress', $this->publicIpAddress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceResourceType) {
            $res['InstanceResourceType'] = $this->instanceResourceType;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->dataDisk) {
            $res['DataDisk'] = null !== $this->dataDisk ? $this->dataDisk->toMap() : null;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
        }
        if (null !== $this->privateIpAddresses) {
            $res['PrivateIpAddresses'] = null !== $this->privateIpAddresses ? $this->privateIpAddresses->toMap() : null;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
        }
        if (null !== $this->innerIpAddress) {
            $res['InnerIpAddress'] = null !== $this->innerIpAddress ? $this->innerIpAddress->toMap() : null;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = null !== $this->publicIpAddress ? $this->publicIpAddress->toMap() : null;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceResourceType'])) {
            $model->instanceResourceType = $map['InstanceResourceType'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['DataDisk'])) {
            $model->dataDisk = dataDisk::fromMap($map['DataDisk']);
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }
        if (isset($map['PrivateIpAddresses'])) {
            $model->privateIpAddresses = privateIpAddresses::fromMap($map['PrivateIpAddresses']);
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['InnerIpAddress'])) {
            $model->innerIpAddress = innerIpAddress::fromMap($map['InnerIpAddress']);
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = publicIpAddress::fromMap($map['PublicIpAddress']);
        }

        return $model;
    }
}
