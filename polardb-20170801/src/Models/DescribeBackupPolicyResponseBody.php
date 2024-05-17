<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupPolicyResponseBody extends Model
{
    /**
     * @description The backup frequency. Default value: Normal. Valid values:
     *
     *   **Normal**: standard backup. The system backs up data once a day.
     *   **2/24H**: enhanced backup. The system backs up data every 2 hours.
     *   **3/24H**: enhanced backup. The system backs up data every 3 hours.
     *   **4/24H**: enhanced backup. The system backs up data every 4 hours.
     *
     * > - If enhanced backup is enabled, all backups are retained for 24 hours. Backups are automatically deleted when the retention period ends. However, the system permanently retains the first backup that is created after 00:00 every day.
     * >-  If enhanced backup is enabled, **PreferredBackupPeriod** is automatically set to all days in a week (from Monday to Sunday).
     * @example Normal
     *
     * @var string
     */
    public $backupFrequency;

    /**
     * @description Indicates whether backups are retained when you delete a cluster. Valid values:
     *
     *   **ALL**: permanently retains all backups.
     *   **LATEST**: permanently retains only the last backup.
     *   **NONE**: does not retain backups.
     *
     * @example NONE
     *
     * @var string
     */
    public $backupRetentionPolicyOnClusterDeletion;

    /**
     * @description The backup frequency of level-1 backups. Default value: Normal. Valid values:
     *
     *   **Normal**: standard backup. The system backs up data once a day.
     *   **2/24H**: frequent backup. The system backs up data every 2 hours.
     *   **3/24H**: frequent backup. The system backs up data every 3 hours.
     *   **4/24H**: frequent backup. The system backs up data every 4 hours.
     *
     * >- This parameter is unavailable if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
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
     * >- This parameter is unavailable if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Monday,Tuesday
     *
     * @var string
     */
    public $dataLevel1BackupPeriod;

    /**
     * @description The retention period of level-1 backups. Valid values: 3 to 14. Unit: day.
     *
     * @example 7
     *
     * @var string
     */
    public $dataLevel1BackupRetentionPeriod;

    /**
     * @description The period of time during which automatic backup is performed. The value must be in the `hh:mmZ-hh:mmZ` format. The time must be in UTC. The start time and the end time must be on the hour and must have an interval of 1 hour. Example: `14:00Z-15:00Z`.
     *
     * >- This parameter is unavailable if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
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
     * > The default value is **0**. By default, the level-2 backup feature is disabled when you create a cluster.
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
     * >- This parameter is unavailable if the region where your PolarDB for MySQL cluster is deployed does not support the cross-region backup feature. For information about regions that support the cross-region backup feature, see [Overview](https://help.aliyun.com/document_detail/72672.html).
     * @example Monday,Tuesday
     *
     * @var string
     */
    public $dataLevel2BackupPeriod;

    /**
     * @description The retention period of level-2 backups. Valid values:
     *
     *   0: The level-2 backup feature is disabled.
     *   30 to 7300: Level-2 backups are retained for 30 to 7,300 days.
     *   \\-1: Level-2 backups are permanently retained.
     *
     * > The default value is **0**. By default, the level-2 backup feature is disabled when you create a cluster.
     * @example 0
     *
     * @var string
     */
    public $dataLevel2BackupRetentionPeriod;

    /**
     * @description The backup cycle. Valid values:
     *
     *   Monday
     *   Tuesday
     *   Wednesday
     *   Thursday
     *   Friday
     *   Saturday
     *   Sunday
     *
     * @example Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday
     *
     * @var string
     */
    public $preferredBackupPeriod;

    /**
     * @description The time period when automatic backups are performed. The format is `HH:mmZ-HH:mmZ`. The time is displayed in UTC.
     *
     * @example 07:00Z-08:00Z
     *
     * @var string
     */
    public $preferredBackupTime;

    /**
     * @description The time when the next automatic backup will be performed. The format is `YYYY-MM-DDThh:mmZ`. The time is displayed in UTC.
     *
     * @example 2020-11-16T07:30Z
     *
     * @var string
     */
    public $preferredNextBackupTime;

    /**
     * @description The ID of the request.
     *
     * @example EADFCE0F-9FB5-4685-B395-1440B******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupFrequency'                              => 'BackupFrequency',
        'backupRetentionPolicyOnClusterDeletion'       => 'BackupRetentionPolicyOnClusterDeletion',
        'dataLevel1BackupFrequency'                    => 'DataLevel1BackupFrequency',
        'dataLevel1BackupPeriod'                       => 'DataLevel1BackupPeriod',
        'dataLevel1BackupRetentionPeriod'              => 'DataLevel1BackupRetentionPeriod',
        'dataLevel1BackupTime'                         => 'DataLevel1BackupTime',
        'dataLevel2BackupAnotherRegionRegion'          => 'DataLevel2BackupAnotherRegionRegion',
        'dataLevel2BackupAnotherRegionRetentionPeriod' => 'DataLevel2BackupAnotherRegionRetentionPeriod',
        'dataLevel2BackupPeriod'                       => 'DataLevel2BackupPeriod',
        'dataLevel2BackupRetentionPeriod'              => 'DataLevel2BackupRetentionPeriod',
        'preferredBackupPeriod'                        => 'PreferredBackupPeriod',
        'preferredBackupTime'                          => 'PreferredBackupTime',
        'preferredNextBackupTime'                      => 'PreferredNextBackupTime',
        'requestId'                                    => 'RequestId',
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
        if (null !== $this->preferredBackupPeriod) {
            $res['PreferredBackupPeriod'] = $this->preferredBackupPeriod;
        }
        if (null !== $this->preferredBackupTime) {
            $res['PreferredBackupTime'] = $this->preferredBackupTime;
        }
        if (null !== $this->preferredNextBackupTime) {
            $res['PreferredNextBackupTime'] = $this->preferredNextBackupTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupPolicyResponseBody
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
        if (isset($map['PreferredBackupPeriod'])) {
            $model->preferredBackupPeriod = $map['PreferredBackupPeriod'];
        }
        if (isset($map['PreferredBackupTime'])) {
            $model->preferredBackupTime = $map['PreferredBackupTime'];
        }
        if (isset($map['PreferredNextBackupTime'])) {
            $model->preferredNextBackupTime = $map['PreferredNextBackupTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
