<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateHanaBackupPlanRequest extends Model
{
    /**
     * @description The backup prefix.
     *
     * @example DIFF_DATA_BACKUP
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
     * This parameter is required.
     * @example COMPLETE
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * This parameter is required.
     * @example cl-00024vyjj9******v
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The name of the backup plan.
     *
     * This parameter is required.
     * @example plan-20220110-113108
     *
     * @var string
     */
    public $planName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmvnf22m7itha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The backup policy. Format: `I|{startTime}|{interval}`. The system runs the first backup job at a point in time that is specified in the {startTime} parameter and the subsequent backup jobs at an interval that is specified in the {interval} parameter. The system does not run a backup job before the specified point in time. Each backup job, except the first one, starts only after the previous backup job is completed. For example, `I|1631685600|P1D` specifies that the system runs the first backup job at 14:00:00 on September 15, 2021 and the subsequent backup jobs once a day.
     *
     *   startTime: the time at which the system starts to run a backup job. The time must follow the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval must follow the ISO 8601 standard. For example, PT1H specifies an interval of one hour. P1D specifies an interval of one day.
     *
     * This parameter is required.
     * @example I|1602673264|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The ID of the backup vault.
     *
     * This parameter is required.
     * @example v-0002pcwhdn******wmi
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupPrefix'    => 'BackupPrefix',
        'backupType'      => 'BackupType',
        'clusterId'       => 'ClusterId',
        'databaseName'    => 'DatabaseName',
        'planName'        => 'PlanName',
        'resourceGroupId' => 'ResourceGroupId',
        'schedule'        => 'Schedule',
        'vaultId'         => 'VaultId',
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
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return CreateHanaBackupPlanRequest
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
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
