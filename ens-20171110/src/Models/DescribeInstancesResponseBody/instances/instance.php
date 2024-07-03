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
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The automatic release time of the instance.
     *
     * @example 2023-06-28T14:38:52Z
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description The number of vCPUs.
     *
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The time when the instance was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-07-26T06:40:43Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Details of the data disk.
     *
     * @var dataDisk
     */
    public $dataDisk;

    /**
     * @description The total size of the disk. Unit: MiB.
     *
     * @example 71680
     *
     * @var int
     */
    public $disk;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The expiration time. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2119-07-13T02:38:57Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The hostname of the instance.
     *
     *   The hostname cannot start or end with a period (.) or hyphen (-). It cannot contain consecutive periods (.) or hyphens (-).
     *   For a Windows instance, the hostname must be 2 to 15 characters in length and can contain letters, digits, and hyphens (-). The hostname cannot contain periods (.) or contain only digits.
     *   For an instance that runs another operating system such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate the hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-).
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the image.
     *
     * @example m-****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The private IP addresses of the instances.
     *
     * @var innerIpAddress
     */
    public $innerIpAddress;

    /**
     * @description The ID of the instance.
     *
     * @example i-instanc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example i-5itef0f28t17bcdw9deu6meub
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The category of the instance. Valid values:
     *
     *   EnsInstance: ENS instances that you purchase.
     *   EnsService: ENS instances that belong to edge services.
     *   BuildMachine: ENS instances that are configured with image builders.
     *   EnsPostPaidInstance: pay-as-you-go ENS instances that you purchase.
     *
     * @example EnsService
     *
     * @var string
     */
    public $instanceResourceType;

    /**
     * @description The instance family. Valid values:
     *
     *   x86_vm: x86-based computing instance.
     *   x86_pm: x86-based physical machine.
     *   x86_bmi: x86-based bare metal instance.
     *   x86_bm: bare metal instance with the SmartNIC.
     *   pc_bmi: heterogeneous bare metal instance.
     *   pc_vm: heterogeneous virtual machine.
     *   arm_bmi: Arm-based computing instance.
     *
     * @example x86_vm
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The maximum outbound bandwidth. Unit: Mbit/s.
     *
     * @example 40
     *
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @description The minimum inbound bandwidth. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The memory size. Unit: MB.
     *
     * @example 2048
     *
     * @var int
     */
    public $memory;

    /**
     * @description Details of the network.
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description The name of the image.
     *
     * @example centos 6.8 x86_64
     *
     * @var string
     */
    public $OSName;

    /**
     * @description Details of the private IP addresses.
     *
     * @var privateIpAddresses
     */
    public $privateIpAddresses;

    /**
     * @description The public IP addresses of the instances.
     *
     * @var publicIpAddress
     */
    public $publicIpAddress;

    /**
     * @description Details of the public IP addresses.
     *
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @description The IDs of the security groups.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The code of the instance type.
     *
     * @example ens.sn1.stiny
     *
     * @var string
     */
    public $specName;

    /**
     * @description The bidding policy of the preemptible instance.
     *
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Running
     *   Expired
     *   Stopped
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description Details of the system disk.
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description The tags of the instance.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'autoReleaseTime'         => 'AutoReleaseTime',
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
        'spotStrategy'            => 'SpotStrategy',
        'status'                  => 'Status',
        'systemDisk'              => 'SystemDisk',
        'tags'                    => 'Tags',
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
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
