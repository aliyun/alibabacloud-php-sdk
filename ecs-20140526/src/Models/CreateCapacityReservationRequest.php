<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCapacityReservationRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateCapacityReservationRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCapacityReservationRequest extends Model
{
    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The `ClientToken` value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the capacity reservation. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The expiration time of the capacity reservation. Specify the time in the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time must be in UTC. For more information, see [ISO 8601](~~25696~~).
     *
     * @example 2021-10-30T06:32:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The release mode of the capacity reservation. Valid values:
     *
     *   Limited: The capacity reservation is released at the specified time. If you specify this parameter, you must also specify the `EndTime` parameter.
     *   Unlimited: The capacity reservation must be manually released. You can release it at any time.
     *
     * @example Unlimited
     *
     * @var string
     */
    public $endTimeType;

    /**
     * @description The total number of instances for which to reserve capacity of an instance type.
     *
     * @example 2
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The instance type. A capacity reservation can be created to reserve the capacity of a single instance type.
     *
     * @example ecs.g6.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The operating system of the image used by the instance. This parameter corresponds to the `Platform` parameter of regional reserved instances. If the operating system of a capacity reservation matches that of a regional reserved instance, the regional reserved instance can be applied to offset bills of the unused capacity of the capacity reservation. Valid values:
     *
     *   Windows: Windows Server operating systems
     *   Linux: Linux and Unix-like operating systems
     *
     * >  This parameter is unavailable.
     * @example Linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The ID of the region in which to create the capacity reservation. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which to assign the capacity reservation.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The mode in which the capacity reservation takes effect. You can specify a time value for this parameter to create the capacity reservation as a scheduled capacity reservation that takes effect at the specified time. Only immediate capacity reservations are supported. You do not need to specify this parameter.
     *
     * >  If this parameter is empty, the capacity reservation is created as an immediate capacity reservation.
     * @example 2021-10-30T05:32:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The tags to add to the capacity reservation. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The IDs of zones within the region in which to create the capacity reservation. A capacity reservation can reserve resources within a single zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string[]
     */
    public $zoneId;
    protected $_name = [
        'privatePoolOptions'   => 'PrivatePoolOptions',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'endTime'              => 'EndTime',
        'endTimeType'          => 'EndTimeType',
        'instanceAmount'       => 'InstanceAmount',
        'instanceType'         => 'InstanceType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'platform'             => 'Platform',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'startTime'            => 'StartTime',
        'tag'                  => 'Tag',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeType) {
            $res['EndTimeType'] = $this->endTimeType;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCapacityReservationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeType'])) {
            $model->endTimeType = $map['EndTimeType'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            if (!empty($map['ZoneId'])) {
                $model->zoneId = $map['ZoneId'];
            }
        }

        return $model;
    }
}
