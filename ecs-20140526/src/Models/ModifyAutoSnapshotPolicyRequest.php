<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var bool
     */
    public $dataDiskPolicyEnabled;

    /**
     * @var int
     */
    public $dataDiskPolicyRetentionDays;

    /**
     * @var bool
     */
    public $dataDiskPolicyRetentionLastWeek;

    /**
     * @var int
     */
    public $dataDiskPolicyTimePeriod;

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
     * @var bool
     */
    public $systemDiskPolicyEnabled;

    /**
     * @var int
     */
    public $systemDiskPolicyRetentionDays;

    /**
     * @var bool
     */
    public $systemDiskPolicyRetentionLastWeek;

    /**
     * @var int
     */
    public $systemDiskPolicyTimePeriod;
    protected $_name = [
        'dataDiskPolicyEnabled'             => 'DataDiskPolicyEnabled',
        'dataDiskPolicyRetentionDays'       => 'DataDiskPolicyRetentionDays',
        'dataDiskPolicyRetentionLastWeek'   => 'DataDiskPolicyRetentionLastWeek',
        'dataDiskPolicyTimePeriod'          => 'DataDiskPolicyTimePeriod',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'systemDiskPolicyEnabled'           => 'SystemDiskPolicyEnabled',
        'systemDiskPolicyRetentionDays'     => 'SystemDiskPolicyRetentionDays',
        'systemDiskPolicyRetentionLastWeek' => 'SystemDiskPolicyRetentionLastWeek',
        'systemDiskPolicyTimePeriod'        => 'SystemDiskPolicyTimePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskPolicyEnabled) {
            $res['DataDiskPolicyEnabled'] = $this->dataDiskPolicyEnabled;
        }
        if (null !== $this->dataDiskPolicyRetentionDays) {
            $res['DataDiskPolicyRetentionDays'] = $this->dataDiskPolicyRetentionDays;
        }
        if (null !== $this->dataDiskPolicyRetentionLastWeek) {
            $res['DataDiskPolicyRetentionLastWeek'] = $this->dataDiskPolicyRetentionLastWeek;
        }
        if (null !== $this->dataDiskPolicyTimePeriod) {
            $res['DataDiskPolicyTimePeriod'] = $this->dataDiskPolicyTimePeriod;
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
        if (null !== $this->systemDiskPolicyEnabled) {
            $res['SystemDiskPolicyEnabled'] = $this->systemDiskPolicyEnabled;
        }
        if (null !== $this->systemDiskPolicyRetentionDays) {
            $res['SystemDiskPolicyRetentionDays'] = $this->systemDiskPolicyRetentionDays;
        }
        if (null !== $this->systemDiskPolicyRetentionLastWeek) {
            $res['SystemDiskPolicyRetentionLastWeek'] = $this->systemDiskPolicyRetentionLastWeek;
        }
        if (null !== $this->systemDiskPolicyTimePeriod) {
            $res['SystemDiskPolicyTimePeriod'] = $this->systemDiskPolicyTimePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskPolicyEnabled'])) {
            $model->dataDiskPolicyEnabled = $map['DataDiskPolicyEnabled'];
        }
        if (isset($map['DataDiskPolicyRetentionDays'])) {
            $model->dataDiskPolicyRetentionDays = $map['DataDiskPolicyRetentionDays'];
        }
        if (isset($map['DataDiskPolicyRetentionLastWeek'])) {
            $model->dataDiskPolicyRetentionLastWeek = $map['DataDiskPolicyRetentionLastWeek'];
        }
        if (isset($map['DataDiskPolicyTimePeriod'])) {
            $model->dataDiskPolicyTimePeriod = $map['DataDiskPolicyTimePeriod'];
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
        if (isset($map['SystemDiskPolicyEnabled'])) {
            $model->systemDiskPolicyEnabled = $map['SystemDiskPolicyEnabled'];
        }
        if (isset($map['SystemDiskPolicyRetentionDays'])) {
            $model->systemDiskPolicyRetentionDays = $map['SystemDiskPolicyRetentionDays'];
        }
        if (isset($map['SystemDiskPolicyRetentionLastWeek'])) {
            $model->systemDiskPolicyRetentionLastWeek = $map['SystemDiskPolicyRetentionLastWeek'];
        }
        if (isset($map['SystemDiskPolicyTimePeriod'])) {
            $model->systemDiskPolicyTimePeriod = $map['SystemDiskPolicyTimePeriod'];
        }

        return $model;
    }
}
