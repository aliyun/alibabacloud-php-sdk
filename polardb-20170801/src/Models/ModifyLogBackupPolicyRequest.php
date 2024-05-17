<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyLogBackupPolicyRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The region in which you want to store cross-region log backups. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $logBackupAnotherRegionRegion;

    /**
     * @description The retention period of cross-region log backups. Valid values:
     *
     *   **0**: The cross-region backup feature is disabled.
     *   **30 to 7300**: Cross-region log backups are retained for 30 to 7,300 days.
     *   **-1**: The log backups are permanently retained.
     *
     * >  When you create a cluster, the default value of this parameter is **0**.
     * @example 30
     *
     * @var string
     */
    public $logBackupAnotherRegionRetentionPeriod;

    /**
     * @description The retention period of the log backups. Valid values:
     *
     *   3 to 7300: The log backups are retained for 3 to 7,300 days.
     *   \\-1: The log backups are permanently retained.
     *
     * @example 3
     *
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
        'DBClusterId'                           => 'DBClusterId',
        'logBackupAnotherRegionRegion'          => 'LogBackupAnotherRegionRegion',
        'logBackupAnotherRegionRetentionPeriod' => 'LogBackupAnotherRegionRetentionPeriod',
        'logBackupRetentionPeriod'              => 'LogBackupRetentionPeriod',
        'ownerAccount'                          => 'OwnerAccount',
        'ownerId'                               => 'OwnerId',
        'resourceOwnerAccount'                  => 'ResourceOwnerAccount',
        'resourceOwnerId'                       => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return ModifyLogBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
