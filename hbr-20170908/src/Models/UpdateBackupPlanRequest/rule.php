<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\UpdateBackupPlanRequest;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The backup type. Valid value: **COMPLETE**, which indicates full backup.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The ID of the region where the remote backup vault resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $destinationRegionId;

    /**
     * @description The retention period of the backup data. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $destinationRetention;

    /**
     * @description Specifies whether to disable the policy.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description Specifies whether to enable remote replication.
     *
     * @example false
     *
     * @var bool
     */
    public $doCopy;

    /**
     * @description The retention period of the backup data. Minimum value: 1. Unit: days.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The name of the backup policy.
     *
     * @example rule-test-name
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The backup policy. Format: I|{startTime}|{interval}. The system runs the first backup job at a point in time that is specified in the {startTime} parameter and the subsequent backup jobs at an interval that is specified in the {interval} parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is completed. For example, I|1631685600|P1D specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     * startTime: the time at which the system starts to run a backup job. The time must follow the UNIX time format. Unit: seconds. interval: the interval at which the system runs a backup job. The interval must follow the ISO 8601 standard. For example, PT1H specifies an interval of one hour. P1D specifies an interval of one day.
     * @example I|1631685600|P1D
     *
     * @var string
     */
    public $schedule;
    protected $_name = [
        'backupType'           => 'BackupType',
        'destinationRegionId'  => 'DestinationRegionId',
        'destinationRetention' => 'DestinationRetention',
        'disabled'             => 'Disabled',
        'doCopy'               => 'DoCopy',
        'retention'            => 'Retention',
        'ruleName'             => 'RuleName',
        'schedule'             => 'Schedule',
    ];

    public function validate()
    {
    }

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
