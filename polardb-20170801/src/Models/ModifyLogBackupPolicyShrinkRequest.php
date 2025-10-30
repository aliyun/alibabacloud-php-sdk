<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyLogBackupPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedLogPoliciesShrink;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $logBackupAnotherRegionRegion;

    /**
     * @var string
     */
    public $logBackupAnotherRegionRetentionPeriod;

    /**
     * @var string
     */
    public $logBackupRetentionPeriod;

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
    protected $_name = [
        'advancedLogPoliciesShrink' => 'AdvancedLogPolicies',
        'DBClusterId' => 'DBClusterId',
        'logBackupAnotherRegionRegion' => 'LogBackupAnotherRegionRegion',
        'logBackupAnotherRegionRetentionPeriod' => 'LogBackupAnotherRegionRetentionPeriod',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedLogPoliciesShrink) {
            $res['AdvancedLogPolicies'] = $this->advancedLogPoliciesShrink;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->logBackupAnotherRegionRegion) {
            $res['LogBackupAnotherRegionRegion'] = $this->logBackupAnotherRegionRegion;
        }

        if (null !== $this->logBackupAnotherRegionRetentionPeriod) {
            $res['LogBackupAnotherRegionRetentionPeriod'] = $this->logBackupAnotherRegionRetentionPeriod;
        }

        if (null !== $this->logBackupRetentionPeriod) {
            $res['LogBackupRetentionPeriod'] = $this->logBackupRetentionPeriod;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedLogPolicies'])) {
            $model->advancedLogPoliciesShrink = $map['AdvancedLogPolicies'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['LogBackupAnotherRegionRegion'])) {
            $model->logBackupAnotherRegionRegion = $map['LogBackupAnotherRegionRegion'];
        }

        if (isset($map['LogBackupAnotherRegionRetentionPeriod'])) {
            $model->logBackupAnotherRegionRetentionPeriod = $map['LogBackupAnotherRegionRetentionPeriod'];
        }

        if (isset($map['LogBackupRetentionPeriod'])) {
            $model->logBackupRetentionPeriod = $map['LogBackupRetentionPeriod'];
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

        return $model;
    }
}
