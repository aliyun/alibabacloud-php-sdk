<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpotPriceHistoryRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601 standard](https://help.aliyun.com/document_detail/25696.html) in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * This parameter is empty by default. If this parameter is empty, the current time is used.
     * @example 2017-08-22T08:45:08Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC. The specified time can be up to 30 days earlier than the specified EndTime value.
     *
     * This parameter is required.
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
     * For instances of other instance families, the default value is optimized.
     * @example optimized
     *
     * @var string
     */
    public $ioOptimized;

    /**
     * @description The network type of the preemptible instance. Valid values:
     *
     *   classic: classic network
     *   vpc: Virtual Private Cloud (VPC)
     *
     * This parameter is required.
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The type of the operating system platform. Valid values:
     *
     * - windows
     * @example linux
     *
     * @var string
     */
    public $OSType;

    /**
     * @description The line from which the query starts.
     *
     * Default value: 0
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
     * @description The zone ID of the preemptible instance.
     *
     * This parameter is required.
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
     * @description The protection period of the preemptible instance. Unit: hours. Default value: 1. Valid values:
     *
     *   1: After a preemptible instance is created, Alibaba Cloud ensures that the instance is not automatically released within 1 hour. After the 1-hour protection period ends, the system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *   0: After a preemptible instance is created, Alibaba Cloud does not ensure that the instance runs for 1 hour. The system compares the bid price with the market price and checks the resource inventory to determine whether to retain or release the instance.
     *
     * >  This parameter takes effect only if you set SpotStrategy to SpotWithPriceLimit or SpotAsPriceGo.
     * @example 1
     *
     * @var int
     */
    public $spotDuration;

    /**
     * @description The beginning of the time range to query. The value of this parameter and the value of EndTime can be up to 30 days apart. Specify the time in the [ISO 8601 standard](https://help.aliyun.com/document_detail/25696.html) in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC.
     *
     * This parameter is left empty by default. If this parameter is empty, the time that is 3 hours earlier than the value of EndTime is used.
     * @example 2017-08-22T08:45:08Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The spot price (market price) of the preemptible instance.
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
