<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class MigrateToOtherZoneRequest extends Model
{
    /**
     * @description The time when the instance is migrated to the destination zone. Valid values:
     *
     *   **Immediately**: The instance is immediately migrated to the destination zone.
     *   **MaintainTime**: The instance is migrated during the maintenance period of the instance.
     *
     * Default value: **Immediately**.
     * @example Immediately
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The ID of the instance.
     *
     * >  If the network type of the instance is VPC, you must specify the **Vswitch** parameter .
     * @example dds-bp2658****
     *
     * @var string
     */
    public $instanceId;

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
     * @description The ID of the vSwitch in the destination zone.
     *
     * >  This parameter is valid and required only when the network type of the instance is VPC.
     * @example vsw-bp67ac****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the destination zone to which you want to migrate the ApsaraDB for MongoDB instance.
     *
     * > * The destination and source zones must be in one region.
     * > * You can call [DescribeRegions](~~61933~~) to query the zone IDs.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'effectiveTime'        => 'EffectiveTime',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateToOtherZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
