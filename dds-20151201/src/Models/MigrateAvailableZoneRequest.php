<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class MigrateAvailableZoneRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
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
     * @var string
     */
    public $secondaryZoneId;

    /**
     * @var string
     */
    public $vswitch;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'effectiveTime' => 'EffectiveTime',
        'hiddenZoneId' => 'HiddenZoneId',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'secondaryZoneId' => 'SecondaryZoneId',
        'vswitch' => 'Vswitch',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
