<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The backup frequency. Default value: Normal. Valid values:
     *
     *   **Normal**: standard backup. The system backs up data once a day.
     *   **2/24H**: enhanced backup. The system backs up data every 2 hours.
     *   **3/24H**: enhanced backup. The system backs up data every 3 hours.
     *   **4/24H**: enhanced backup. The system backs up data every 4 hours.
     *
     * >- If you enable enhanced backup, all backups are retained for 24 hours. For backup files that are created earlier than the previous 24 hours, the system permanently retains only the first backup that is created after 00:00 every day and deletes the rest.
     * >- If you enable enhanced backup, **PreferredBackupPeriod** is automatically set to all days in a week (from Monday to Sunday).
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed supports the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Normal
     *
     * @var string
     */
    public $backupFrequency;

    /**
     * @description Specifies whether to retain backups when you delete a cluster. Valid values:
     *
     *   **ALL**: permanently retains all backups.
     *   **LATEST**: permanently retains only the last backup.
     *   **NONE**: does not retain backups.
     *
     * > The default value is NONE.
     * @example NONE
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     * @example pc-bp13wz9586voc****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The frequency of level-1 backups. Default value: Normal. Valid values:
     *
     *   **Normal**: standard backup. The system backs up data once a day.
     *   **2/24H**: enhanced backup. The system backs up data every 2 hours.
     *   **3/24H**: enhanced backup. The system backs up data every 3 hours.
     *   **4/24H**: enhanced backup. The system backs up data every 4 hours.
     *
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Normal
     *
     * @var string
     */
    public $dataLevel1BackupFrequency;

    /**
     * @description The backup cycle of level-1 backups. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Monday,Tuesday
     *
     * @var string
     */
    public $dataLevel1BackupPeriod;

    /**
     * @description The retention period of level-1 backups. Valid values: 3 to 14. Unit: days.
     *
     * @example 3
     *
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @description The time period during which automatic backup for level-1 backup is performed. The time period is in the `hh:mmZ-hh:mmZ` format and is displayed in UTC. The start time and end time are on the hour and have an interval of 1 hour. Example: `14:00Z-15:00Z`.
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $dataLevel1BackupTime;

    /**
     * @description The region where the cross-region level-2 backup is stored. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataLevel2BackupAnotherRegionRegion;

    /**
     * @description The retention period of cross-region level-2 backups. Valid values:
     *
     *   **0**: The cross-region level-2 backup feature is disabled.
     *   **30 to 7300**: Cross-region level-2 backups are retained for 30 to 7,300 days.
     *   **1**: Cross-region level-2 backups are permanently retained.
     *
     * > The default value is **0**. By default, the cross-region level-2 backup feature is disabled when you create a cluster.
     * @example 30
     *
     * @var string
     */
    public $dataLevel2BackupAnotherRegionRetentionPeriod;

    /**
     * @description The backup cycle of level-2 backups. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Monday,Tuesday
     *
     * @var string
     */
    public $dataLevel2BackupPeriod;

    /**
     * @description The retention period of level-2 backups. Valid values:
     *
     *   **0**: The level-2 backup feature is disabled.
     *   **30 to 7300**: Cross-region level-2 backups are retained for 30 to 7,300 days.
     *   **1**: Cross-region level-2 backups are permanently retained.
     *
     * > The default value is **0**. By default, the level-2 backup feature is disabled when you create a cluster.
     * @example 0
     *
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The backup cycle. Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >- This parameter is invalid if the region where your PolarDB for MySQL cluster is deployed supports the cross-region backup feature. For information about the regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Monday,Tuesday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time period during which automatic backup for level-1 backup is performed. The format is `hh:mmZ-hh:mmZ` format. The time is displayed in UTC. The start time and end time are on the hour and with an interval of one hour. Example: `14:00Z-15:00Z`.
     *
     * @example 15:00Z-16:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'backupFrequency'                              => 'BackupFrequency',
        'backupRetentionPolicyOnClusterDeletion'       => 'BackupRetentionPolicyOnClusterDeletion',
        'DBClusterId'                                  => 'DBClusterId',
        'dataLevel1BackupFrequency'                    => 'DataLevel1BackupFrequency',
        'dataLevel1BackupPeriod'                       => 'DataLevel1BackupPeriod',
        'dataLevel1BackupRetentionPeriod'              => 'DataLevel1BackupRetentionPeriod',
        'dataLevel1BackupTime'                         => 'DataLevel1BackupTime',
        'dataLevel2BackupAnotherRegionRegion'          => 'DataLevel2BackupAnotherRegionRegion',
        'dataLevel2BackupAnotherRegionRetentionPeriod' => 'DataLevel2BackupAnotherRegionRetentionPeriod',
        'dataLevel2BackupPeriod'                       => 'DataLevel2BackupPeriod',
        'dataLevel2BackupRetentionPeriod'              => 'DataLevel2BackupRetentionPeriod',
        'ownerAccount'                                 => 'OwnerAccount',
        'ownerId'                                      => 'OwnerId',
        'preferredBackupPeriod'                        => 'PreferredBackupPeriod',
        'preferredBackupTime'                          => 'PreferredBackupTime',
        'resourceOwnerAccount'                         => 'ResourceOwnerAccount',
        'resourceOwnerId'                              => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupFrequency) {
            $res['BackupFrequency'] = $this->backupFrequency;
        }
        if (null !== $this->backupRetentionPolicyOnClusterDeletion) {
            $res['BackupRetentionPolicyOnClusterDeletion'] = $this->backupRetentionPolicyOnClusterDeletion;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->dataLevel1BackupFrequency) {
            $res['DataLevel1BackupFrequency'] = $this->dataLevel1BackupFrequency;
        }
        if (null !== $this->dataLevel1BackupPeriod) {
            $res['DataLevel1BackupPeriod'] = $this->dataLevel1BackupPeriod;
        }
        if (null !== $this->dataLevel1BackupRetentionPeriod) {
            $res['DataLevel1BackupRetentionPeriod'] = $this->dataLevel1BackupRetentionPeriod;
        }
        if (null !== $this->dataLevel1BackupTime) {
            $res['DataLevel1BackupTime'] = $this->dataLevel1BackupTime;
        }
        if (null !== $this->dataLevel2BackupAnotherRegionRegion) {
            $res['DataLevel2BackupAnotherRegionRegion'] = $this->dataLevel2BackupAnotherRegionRegion;
        }
        if (null !== $this->dataLevel2BackupAnotherRegionRetentionPeriod) {
            $res['DataLevel2BackupAnotherRegionRetentionPeriod'] = $this->dataLevel2BackupAnotherRegionRetentionPeriod;
        }
        if (null !== $this->dataLevel2BackupPeriod) {
            $res['DataLevel2BackupPeriod'] = $this->dataLevel2BackupPeriod;
        }
        if (null !== $this->dataLevel2BackupRetentionPeriod) {
            $res['DataLevel2BackupRetentionPeriod'] = $this->dataLevel2BackupRetentionPeriod;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
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
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupFrequency'])) {
            $model->backupFrequency = $map['BackupFrequency'];
        }
        if (isset($map['BackupRetentionPolicyOnClusterDeletion'])) {
            $model->backupRetentionPolicyOnClusterDeletion = $map['BackupRetentionPolicyOnClusterDeletion'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DataLevel1BackupFrequency'])) {
            $model->dataLevel1BackupFrequency = $map['DataLevel1BackupFrequency'];
        }
        if (isset($map['DataLevel1BackupPeriod'])) {
            $model->dataLevel1BackupPeriod = $map['DataLevel1BackupPeriod'];
        }
        if (isset($map['DataLevel1BackupRetentionPeriod'])) {
            $model->dataLevel1BackupRetentionPeriod = $map['DataLevel1BackupRetentionPeriod'];
        }
        if (isset($map['DataLevel1BackupTime'])) {
            $model->dataLevel1BackupTime = $map['DataLevel1BackupTime'];
        }
        if (isset($map['DataLevel2BackupAnotherRegionRegion'])) {
            $model->dataLevel2BackupAnotherRegionRegion = $map['DataLevel2BackupAnotherRegionRegion'];
        }
        if (isset($map['DataLevel2BackupAnotherRegionRetentionPeriod'])) {
            $model->dataLevel2BackupAnotherRegionRetentionPeriod = $map['DataLevel2BackupAnotherRegionRetentionPeriod'];
        }
        if (isset($map['DataLevel2BackupPeriod'])) {
            $model->dataLevel2BackupPeriod = $map['DataLevel2BackupPeriod'];
        }
        if (isset($map['DataLevel2BackupRetentionPeriod'])) {
            $model->dataLevel2BackupRetentionPeriod = $map['DataLevel2BackupRetentionPeriod'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
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
