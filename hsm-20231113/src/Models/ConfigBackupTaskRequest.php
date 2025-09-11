<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class ConfigBackupTaskRequest extends Model
{
    /**
     * @var int
     */
    public $backupHourInDay;

    /**
     * @var string
     */
    public $backupId;

    /**
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
        'backupHourInDay' => 'BackupHourInDay',
        'backupId' => 'BackupId',
        'backupPeriod' => 'BackupPeriod',
        'manual2PeriodicList' => 'Manual2PeriodicList',
        'periodic2ManualList' => 'Periodic2ManualList',
    ];

    public function validate()
    {
        if (\is_array($this->manual2PeriodicList)) {
            Model::validateArray($this->manual2PeriodicList);
        }
        if (\is_array($this->periodic2ManualList)) {
            Model::validateArray($this->periodic2ManualList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->manual2PeriodicList)) {
                $res['Manual2PeriodicList'] = [];
                $n1 = 0;
                foreach ($this->manual2PeriodicList as $item1) {
                    $res['Manual2PeriodicList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->periodic2ManualList) {
            if (\is_array($this->periodic2ManualList)) {
                $res['Periodic2ManualList'] = [];
                $n1 = 0;
                foreach ($this->periodic2ManualList as $item1) {
                    $res['Periodic2ManualList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->manual2PeriodicList = [];
                $n1 = 0;
                foreach ($map['Manual2PeriodicList'] as $item1) {
                    $model->manual2PeriodicList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Periodic2ManualList'])) {
            if (!empty($map['Periodic2ManualList'])) {
                $model->periodic2ManualList = [];
                $n1 = 0;
                foreach ($map['Periodic2ManualList'] as $item1) {
                    $model->periodic2ManualList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
