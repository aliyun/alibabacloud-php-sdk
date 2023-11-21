<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostClassRequest extends Model
{
    /**
     * @description The host ID. You can log on to the ApsaraDB for MyBase console and go to the **Hosts** page to view the host ID.
     *
     * @example ch-bp1fgj3kt7fsb****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The [region ID](~~198326~~).
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
     * @description The time when you want to upgrade the specifications of the host. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  This parameter must be specified only when SwitchTimeMode is set to 2.
     * @example 2021-07-13T07:14:22Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The execution mode that is used to upgrade host specifications. Valid values:
     *
     *   **0** (default): immediately upgrades host specifications.
     *   **2**: upgrades host specifications at a specified point in time.
     *
     * >  If you set this parameter to **2**, you must specify **SwitchTime**.
     * @example 2
     *
     * @var string
     */
    public $switchTimeMode;

    /**
     * @description The instance type to which you want the host to be upgraded. For more information, see [Host specification details](~~206343~~).
     *
     * @example rds.c6.x4large
     *
     * @var string
     */
    public $targetClassCode;
    protected $_name = [
        'dedicatedHostId'      => 'DedicatedHostId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'switchTime'           => 'SwitchTime',
        'switchTimeMode'       => 'SwitchTimeMode',
        'targetClassCode'      => 'TargetClassCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
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
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }
        if (null !== $this->targetClassCode) {
            $res['TargetClassCode'] = $this->targetClassCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostClassRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
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
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }
        if (isset($map['TargetClassCode'])) {
            $model->targetClassCode = $map['TargetClassCode'];
        }

        return $model;
    }
}
