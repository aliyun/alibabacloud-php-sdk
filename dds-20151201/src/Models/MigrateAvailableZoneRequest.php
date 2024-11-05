<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class MigrateAvailableZoneRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * > If the instance is deployed in a VPC, you must specify the **Vswitch** parameter.
     *
     * This parameter is required.
     * @example dds-bp1ece71ff2f****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The time when the instance is migrated to the destination zone. Valid values:
     *
     *   **Immediately**: The instance is immediately migrated to the destination zone.
     *   **MaintainTime**: The instance is migrated to the destination zone during the maintenance window of the instance.
     *
     * Default value: **Immediately**.
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The ID of the destination hidden zone.
     *
     * @example cn-shanghai-n
     *
     * @var string
     */
    public $hiddenZoneId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the destination secondary zone.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @description The ID of the vSwitch in the destination zone.
     *
     * > If the instance is deployed in a VPC, you must specify this parameter.
     * @example vsw-bp1buy0h9myt5i9e7****
     *
     * @var string
     */
    public $vswitch;

    /**
     * @description The ID of the destination zone.
     *
     * >
     *
     *   The source zone and the destination zone belong to the same region.
     *
     *   You can call the [DescribeRegions](https://help.aliyun.com/document_detail/61933.html) operation to query the zone ID.
     *
     * This parameter is required.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'effectiveTime'        => 'EffectiveTime',
        'hiddenZoneId'         => 'HiddenZoneId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'secondaryZoneId'      => 'SecondaryZoneId',
        'vswitch'              => 'Vswitch',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->hiddenZoneId) {
            $res['HiddenZoneId'] = $this->hiddenZoneId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secondaryZoneId) {
            $res['SecondaryZoneId'] = $this->secondaryZoneId;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateAvailableZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['HiddenZoneId'])) {
            $model->hiddenZoneId = $map['HiddenZoneId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecondaryZoneId'])) {
            $model->secondaryZoneId = $map['SecondaryZoneId'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
