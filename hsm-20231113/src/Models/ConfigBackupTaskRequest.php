<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigBackupTaskRequest extends Model
{
    /**
     * @description The backup time in the 24-hour format. Valid values: 1 to 24.
     *
     * Enumeration values:
     *
     *   0
     *   1
     *   2
     *   3
     *   4
     *   5
     *   6
     *   7
     *   8
     *   9
     *   10
     *   11
     *   12
     *   13
     *   14
     *   15
     *   16
     *   17
     *   18
     *   19
     *   20
     *   21
     *   22
     *   23
     *
     * This parameter is required.
     * @example 12
     *
     * @var int
     */
    public $backupHourInDay;

    /**
     * @description The ID of the backup.
     *
     * This parameter is required.
     * @example backup-173620705****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The automatic backup cycle. Unit: days. Valid values: 1, 3, 7, and 30.
     *
     * This parameter is required.
     * @example 3
     *
     * @var int
     */
    public $backupPeriod;

    /**
     * @description The IDs of images for which the manual backup mode is updated to the automatic backup mode.
     *
     * @var string[]
     */
    public $manual2PeriodicList;

    /**
     * @description The IDs of images for which the automatic backup mode is updated to the manual backup mode.
     *
     * @var string[]
     */
    public $periodic2ManualList;
    protected $_name = [
        'backupHourInDay'     => 'BackupHourInDay',
        'backupId'            => 'BackupId',
        'backupPeriod'        => 'BackupPeriod',
        'manual2PeriodicList' => 'Manual2PeriodicList',
        'periodic2ManualList' => 'Periodic2ManualList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupHourInDay) {
            $res['BackupHourInDay'] = $this->backupHourInDay;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->manual2PeriodicList) {
            $res['Manual2PeriodicList'] = $this->manual2PeriodicList;
        }
        if (null !== $this->periodic2ManualList) {
            $res['Periodic2ManualList'] = $this->periodic2ManualList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigBackupTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupHourInDay'])) {
            $model->backupHourInDay = $map['BackupHourInDay'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['Manual2PeriodicList'])) {
            if (!empty($map['Manual2PeriodicList'])) {
                $model->manual2PeriodicList = $map['Manual2PeriodicList'];
            }
        }
        if (isset($map['Periodic2ManualList'])) {
            if (!empty($map['Periodic2ManualList'])) {
                $model->periodic2ManualList = $map['Periodic2ManualList'];
            }
        }

        return $model;
    }
}
