<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class ConfigBackupTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12
     *
     * @var int
     */
    public $backupHourInDay;

    /**
     * @description This parameter is required.
     *
     * @example backup-173620705****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
     * @var int
     */
    public $backupPeriod;

    /**
     * @var string[]
     */
    public $manual2PeriodicList;

    /**
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
