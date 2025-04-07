<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateHanaRetentionSettingRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * This parameter is required.
     *
     * @example cl-00024vyjj******srrq
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The database name.
     *
     * This parameter is required.
     *
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Specifies whether to permanently retain the backup. Valid values:
     *
     *   true: The backup is permanently retained.
     *   false: The backup is retained for the specified number of days.
     *
     * This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The retention period of the backup data. Unit: days. If you set the Disabled parameter to false, the backup is retained for the number of days specified by this parameter.
     *
     * This parameter is required.
     *
     * @example 90
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The policy to update the retention period. Format: `I|{startTime}|{interval}`. The retention period is updated at an interval of {interval} starting from {startTime}.
     *
     *   startTime: the time at which the system starts to run a backup job. The time follows the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system runs a backup job. The interval follows the ISO 8601 standard. For example, PT1H indicates an interval of 1 hour, and P1D indicates an interval of one day.
     *
     * This parameter is required.
     *
     * @example I|0|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The ID of the backup vault.
     *
     * This parameter is required.
     *
     * @example v-000fb0v2ly******k6
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'disabled' => 'Disabled',
        'retentionDays' => 'RetentionDays',
        'schedule' => 'Schedule',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
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
     * @return UpdateHanaRetentionSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
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
