<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreOrderRequest extends Model
{
    /**
     * @description The name of the database involved in the backup.
     *
     * @example drds_flashback
     *
     * @var string
     */
    public $backupDbNames;

    /**
     * @description The ID of the backup set.
     *
     * @example 1918df27-4563-11e9-8403-af4fbe******
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The level of the backup. Valid values:
     *
     *   **DB**: The database Level
     *   **instance **: instance level
     *
     * @example db
     *
     * @var string
     */
    public $backupLevel;

    /**
     * @description The backup mode. Valid values: **logic** or **phy**.
     *
     * @example phy
     *
     * @var string
     */
    public $backupMode;

    /**
     * @description The ID of the instance for which to modify the backup policy.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The preferred backup time.
     *
     * @example 2019-09-16 15:12:53
     *
     * @var string
     */
    public $preferredBackupTime;
    protected $_name = [
        'backupDbNames'       => 'BackupDbNames',
        'backupId'            => 'BackupId',
        'backupLevel'         => 'BackupLevel',
        'backupMode'          => 'BackupMode',
        'drdsInstanceId'      => 'DrdsInstanceId',
        'preferredBackupTime' => 'PreferredBackupTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDbNames) {
            $res['BackupDbNames'] = $this->backupDbNames;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupLevel) {
            $res['BackupLevel'] = $this->backupLevel;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDbNames'])) {
            $model->backupDbNames = $map['BackupDbNames'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupLevel'])) {
            $model->backupLevel = $map['BackupLevel'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }

        return $model;
    }
}
