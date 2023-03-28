<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ReportInstancesStatusRequest extends Model
{
    /**
     * @description The description of the exception.
     *
     * @example The local disk is unavailable, the mount point is inaccessible, or files cannot be loaded.
     *
     * @var string
     */
    public $description;

    /**
     * @description The device names of disks on an instance that have the exception. You can specify to 100 device names in a single request.
     *
     * > For ECS bare metal instances, this parameter is required when the value of the `Reason` parameter is `abnormal-local-disk` or `abnormal-cloud-disk` or when the value of the `IssueCategory` parameter is `hardware-disk-error`.
     * @example /dev/xvdb
     *
     * @var string[]
     */
    public $device;

    /**
     * @description The IDs of disks on an instance that have the exception. You can specify up to 100 disk IDs in a single request. If you are using an ECS bare metal instance, enter the serial numbers of disks on the instance.
     *
     * > This parameter is required when the value of the `Reason` parameter is `abnormal-local-disk` or `abnormal-cloud-disk` or when the value of the `IssueCategory` parameter is `hardware-disk-error`.
     * @example d-bp1aeljlfad7x6u1****
     *
     * @var string[]
     */
    public $diskId;

    /**
     * @description The end time of the instance exception. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-11-31T06:32:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The IDs of instances. You can specify up to 100 instance IDs in a single request.
     *
     * @example i-bp165p6xk2tmdhj0****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The category of the exception. This parameter is applicable only to ECS bare metal instances. Valid values:
     *
     *   hardware-cpu-error: CPU failure
     *   hardware-motherboard-error: motherboard failure
     *   hardware-mem-error: memory failure
     *   hardware-power-error: power failure
     *   hardware-disk-error: disk failure
     *   hardware-networkcard-error: network interface controller (NIC) failure
     *   hardware-raidcard-error: SAS/RAID card failure
     *   hardware-fan-error: fan failure
     *   others: other failures
     *
     * @example hardware-cpu-error
     *
     * @var string
     */
    public $issueCategory;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The impact of the exception on the instance. Valid values:
     *
     *   instance-hang: The instance is unavailable or cannot be connected.
     *   instance-stuck-in-status: The instance is stuck in a state such as Starting or Stopping.
     *   abnormal-network: The instance has a network exception.
     *   abnormal-local-disk: A local disk attached to the instance has an exception.
     *   abnormal-cloud-disk: A disk or a Shared Block Storage device attached to the instance has an exception.
     *   others: other exception types. If the impact is not of the preceding types, you can set `Reason` to others and specify the `Description` parameter.
     *
     * @example abnormal-local-disk
     *
     * @var string
     */
    public $reason;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The start time of the instance exception. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-11-30T06:32:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'description'          => 'Description',
        'device'               => 'Device',
        'diskId'               => 'DiskId',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'issueCategory'        => 'IssueCategory',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'reason'               => 'Reason',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
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
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->issueCategory) {
            $res['IssueCategory'] = $this->issueCategory;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportInstancesStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = $map['Device'];
            }
        }
        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = $map['DiskId'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['IssueCategory'])) {
            $model->issueCategory = $map['IssueCategory'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
