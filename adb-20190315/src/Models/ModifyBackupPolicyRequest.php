<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @description The number of days for which to retain full backup files. Valid values: 7 to 730.
     *
     * >  If you leave this parameter empty, the default value 7 is used.
     * @example 30
     *
     * @var string
     */
    public $backupRetentionPeriod;

    /**
     * @description The ID of the cluster.
     *
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable real-time log backup. Valid values:
     *
     *   **Enable**
     *
     *   **Disable**
     *
     * > If you leave this parameter empty, the default value Enable is used.
     * @example Enable
     *
     * @var string
     */
    public $enableBackupLog;

    /**
     * @description The number of days for which to retain log backup files. Valid values: 7 to 730.
     *
     * >  If you leave this parameter empty, the default value 7 is used.
     * @example 30
     *
     * @var int
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
     * @description The days of the week on which to perform full backup. Separate multiple values with commas (,). Valid values:
     *
     *   **Monday**
     *   **Tuesday**
     *   **Wednesday**
     *   **Thursday**
     *   **Friday**
     *   **Saturday**
     *   **Sunday**
     *
     * >  To ensure data security, we recommend that you specify at least two values.
     * @example Monday,Wednesday,Friday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The start time of the full backup within a time range. Specify the time range in the HH:mmZ-HH:mmZ format. The time must be in UTC.
     *
     * >  The time range is 1 hour.
     * @example 00:00Z-01:00Z
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
        'backupRetentionPeriod'    => 'BackupRetentionPeriod',
        'DBClusterId'              => 'DBClusterId',
        'enableBackupLog'          => 'EnableBackupLog',
        'logBackupRetentionPeriod' => 'LogBackupRetentionPeriod',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'preferredBackupPeriod'    => 'PreferredBackupPeriod',
        'preferredBackupTime'      => 'PreferredBackupTime',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRetentionPeriod) {
            $res['BackupRetentionPeriod'] = $this->backupRetentionPeriod;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enableBackupLog) {
            $res['EnableBackupLog'] = $this->enableBackupLog;
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
        if (isset($map['BackupRetentionPeriod'])) {
            $model->backupRetentionPeriod = $map['BackupRetentionPeriod'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EnableBackupLog'])) {
            $model->enableBackupLog = $map['EnableBackupLog'];
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
