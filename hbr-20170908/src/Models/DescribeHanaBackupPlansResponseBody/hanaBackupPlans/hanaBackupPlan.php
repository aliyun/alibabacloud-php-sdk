<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaBackupPlansResponseBody\hanaBackupPlans;

use AlibabaCloud\Tea\Model;

class hanaBackupPlan extends Model
{
    /**
     * @description The backup prefix.
     *
     * @example COMPLETE_DATA_BACKUP
     *
     * @var string
     */
    public $backupPrefix;

    /**
     * @description The backup type. Valid values:
     *
     *   COMPLETE: full backup
     *   INCREMENTAL: incremental backup
     *   DIFFERENTIAL: differential backup
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0002scknka*****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database.
     *
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Indicates whether the backup plan is disabled. Valid values:
     *
     *   true: The backup plan is disabled.
     *   false: The backup plan is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The ID of the backup plan.
     *
     * @example pl-0000tnyndg3ne5m4ubeu
     *
     * @var string
     */
    public $planId;

    /**
     * @description The name of the backup plan.
     *
     * @example plan-20220118-141153
     *
     * @var string
     */
    public $planName;

    /**
     * @description The backup policy. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the {startTime} parameter and the subsequent backup jobs at an interval that is specified in the {interval} parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is completed. For example, `I|1631685600|P1D` specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   startTime: the time at which the system starts to run a backup job. The time follows the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of 1 hour. P1D indicates an interval of one day.
     *
     * @example I|1602673264|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000csihw82pqkd7hcjws
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupPrefix' => 'BackupPrefix',
        'backupType'   => 'BackupType',
        'clusterId'    => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'disabled'     => 'Disabled',
        'planId'       => 'PlanId',
        'planName'     => 'PlanName',
        'schedule'     => 'Schedule',
        'vaultId'      => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPrefix) {
            $res['BackupPrefix'] = $this->backupPrefix;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaBackupPlan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPrefix'])) {
            $model->backupPrefix = $map['BackupPrefix'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
