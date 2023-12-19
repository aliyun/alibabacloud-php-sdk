<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateHanaRetentionSettingRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-00024vyjj******srrq
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
     * @description Specifies whether to permanently retain the backup. Valid values:
     *
     *   true: The backup is permanently retained.
     *   false: The backup is retained for the specified number of days.
     *
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description The number of days for which the backup is retained. If you set the Disabled parameter to false, the backup is retained for the number of days specified by this parameter.
     *
     * @example 90
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The policy to update the retention period. Format: `I|{startTime}|{interval}`. The retention period is updated at an interval of {interval} starting from {startTime}.
     *
     *   startTime: the time at which the system starts to update the retention period. The time must follow the UNIX time format. Unit: seconds.
     *   interval: the interval at which the system updates the retention period. The interval must follow the ISO 8601 standard. For example, PT1H specifies an interval of 1 hour and P1D specifies an interval of one day.
     *
     * @example I|0|P1D
     *
     * @var string
     */
    public $schedule;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000fb0v2ly******k6
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'databaseName'  => 'DatabaseName',
        'disabled'      => 'Disabled',
        'retentionDays' => 'RetentionDays',
        'schedule'      => 'Schedule',
        'vaultId'       => 'VaultId',
    ];

    public function validate()
    {
    }

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
