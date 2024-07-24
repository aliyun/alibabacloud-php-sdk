<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVSwitchCidrReservationAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the vSwitch is deployed.
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
     * @description The new description of the reserved CIDR block. The default value is empty.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter and cannot start with `http://` or `https://`.
     * @example ReservationDescription
     *
     * @var string
     */
    public $vSwitchCidrReservationDescription;

    /**
     * @description The ID of the reserved CIDR block.
     *
     * This parameter is required.
     * @example vcr-bp1m12saqteraw3rp****
     *
     * @var string
     */
    public $vSwitchCidrReservationId;

    /**
     * @description The new name of the reserved CIDR block.
     *
     * The name must be 2 to 128 characters in length and can contain letters, digits, underscores (_), and hyphens (-). It must start with a letter.
     * @example ReservationName
     *
     * @var string
     */
    public $vSwitchCidrReservationName;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'dryRun'                            => 'DryRun',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'regionId'                          => 'RegionId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'vSwitchCidrReservationDescription' => 'VSwitchCidrReservationDescription',
        'vSwitchCidrReservationId'          => 'VSwitchCidrReservationId',
        'vSwitchCidrReservationName'        => 'VSwitchCidrReservationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->vSwitchCidrReservationDescription) {
            $res['VSwitchCidrReservationDescription'] = $this->vSwitchCidrReservationDescription;
        }
        if (null !== $this->vSwitchCidrReservationId) {
            $res['VSwitchCidrReservationId'] = $this->vSwitchCidrReservationId;
        }
        if (null !== $this->vSwitchCidrReservationName) {
            $res['VSwitchCidrReservationName'] = $this->vSwitchCidrReservationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVSwitchCidrReservationAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['VSwitchCidrReservationDescription'])) {
            $model->vSwitchCidrReservationDescription = $map['VSwitchCidrReservationDescription'];
        }
        if (isset($map['VSwitchCidrReservationId'])) {
            $model->vSwitchCidrReservationId = $map['VSwitchCidrReservationId'];
        }
        if (isset($map['VSwitchCidrReservationName'])) {
            $model->vSwitchCidrReservationName = $map['VSwitchCidrReservationName'];
        }

        return $model;
    }
}
