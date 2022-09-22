<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateCapacityReservationRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCapacityReservationRequest extends Model
{
    /**
     * @var string
     */
    public $capacityReservationName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDateType;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $instanceMatchCriteria;

    /**
     * @var string
     */
    public $instancePlatform;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $timeSlot;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'capacityReservationName' => 'CapacityReservationName',
        'description'             => 'Description',
        'endDateType'             => 'EndDateType',
        'instanceCount'           => 'InstanceCount',
        'instanceMatchCriteria'   => 'InstanceMatchCriteria',
        'instancePlatform'        => 'InstancePlatform',
        'instanceType'            => 'InstanceType',
        'networkType'             => 'NetworkType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'tag'                     => 'Tag',
        'timeSlot'                => 'TimeSlot',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityReservationName) {
            $res['CapacityReservationName'] = $this->capacityReservationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDateType) {
            $res['EndDateType'] = $this->endDateType;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceMatchCriteria) {
            $res['InstanceMatchCriteria'] = $this->instanceMatchCriteria;
        }
        if (null !== $this->instancePlatform) {
            $res['InstancePlatform'] = $this->instancePlatform;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->timeSlot) {
            $res['TimeSlot'] = $this->timeSlot;
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
        if (isset($map['CapacityReservationName'])) {
            $model->capacityReservationName = $map['CapacityReservationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDateType'])) {
            $model->endDateType = $map['EndDateType'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceMatchCriteria'])) {
            $model->instanceMatchCriteria = $map['InstanceMatchCriteria'];
        }
        if (isset($map['InstancePlatform'])) {
            $model->instancePlatform = $map['InstancePlatform'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
        if (isset($map['TimeSlot'])) {
            $model->timeSlot = $map['TimeSlot'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
