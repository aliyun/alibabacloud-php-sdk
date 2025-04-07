<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreateBackupPlanRequest;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description Backup type.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description ID of the region for offsite replication.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description Number of days to retain offsite backups.
     *
     * @example 7
     *
     * @var int
     */
    public $destinationRetention;

    /**
     * @description Whether the rule is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description Whether to enable offsite replication.
     *
     * @example true
     *
     * @var bool
     */
    public $doCopy;

    /**
     * @description Backup retention period.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description Rule name.
     *
     * @example rule-test-name
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Backup strategy. Optional format: I|{startTime}|{interval}. This means that a backup task is executed every {interval} starting from {startTime}. Backup tasks for past times will not be executed. If the previous backup task has not been completed, the next backup task will not be triggered. For example, I|1631685600|P1D means a backup is performed every day starting from 2021-09-15 14:00:00.
     *
     * - startTime: The start time of the backup, in UNIX time, in seconds.
     * - interval: ISO8601 time interval. For example, PT1H means an interval of one hour. P1D means an interval of one day.
     *
     * @example I|1602673264|P1D
     *
     * @var string
     */
    public $schedule;
    protected $_name = [
        'backupType' => 'BackupType',
        'destinationRegionId' => 'DestinationRegionId',
        'destinationRetention' => 'DestinationRetention',
        'disabled' => 'Disabled',
        'doCopy' => 'DoCopy',
        'retention' => 'Retention',
        'ruleName' => 'RuleName',
        'schedule' => 'Schedule',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }
        if (null !== $this->destinationRetention) {
            $res['DestinationRetention'] = $this->destinationRetention;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->doCopy) {
            $res['DoCopy'] = $this->doCopy;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }
        if (isset($map['DestinationRetention'])) {
            $model->destinationRetention = $map['DestinationRetention'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['DoCopy'])) {
            $model->doCopy = $map['DoCopy'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
