<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpotPriceHistoryRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC`.
     *
     * This parameter is empty by default. If this parameter is empty, the current time is used.
     * @example 2017-08-22T08:45:08Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.t1.xsmall
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether the instance is I/O optimized. Valid values:
     *
     *   optimized: The instance is I/O optimized.
     *   none: The instance is not I/O optimized.
     *
     * For other instance families, the default value is optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The network type of the preemptible instance. Valid values:
     *
     *   classic
     *   vpc
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The type of the operating system platform. Valid values:
     *
     *   linux
     *   windows
     *
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The line from which the next query starts.
     *
     * Default value: 0.
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
     * @description The protection period of the preemptible instance. Unit: hours. Valid values: 0, 1, 2, 3, 4, 5, and 6.
     *
     *   Protection periods of 2, 3, 4, 5, and 6 hours are in invitational preview. If you want to set this parameter to one of these values, submit a ticket.
     *   If this parameter is set to 0, no protection period is configured for the preemptible instance.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC`.
     *
     * This parameter is empty by default. If this parameter is empty, it indicates 3 hours earlier than the specified EndTime value. You can specify a StartTime value of up to 30 days earlier than the specified EndTime value.
     * @example 2017-08-22T08:45:08Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The zone ID of the instance.
     *
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'endTime'              => 'EndTime',
        'instanceType'         => 'InstanceType',
        'ioOptimized'          => 'IoOptimized',
        'networkType'          => 'NetworkType',
        'OSType'               => 'OSType',
        'offset'               => 'Offset',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'spotDuration'         => 'SpotDuration',
        'startTime'            => 'StartTime',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->spotDuration) {
            $res['SpotDuration'] = $this->spotDuration;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpotPriceHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SpotDuration'])) {
            $model->spotDuration = $map['SpotDuration'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
