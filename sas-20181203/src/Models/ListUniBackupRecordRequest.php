<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListUniBackupRecordRequest extends Model
{
    /**
     * @var string
     */
    public $backupRegionId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $machineRemark;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'backupRegionId' => 'BackupRegionId',
        'currentPage' => 'CurrentPage',
        'machineRemark' => 'MachineRemark',
        'pageSize' => 'PageSize',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRegionId) {
            $res['BackupRegionId'] = $this->backupRegionId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->machineRemark) {
            $res['MachineRemark'] = $this->machineRemark;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['BackupRegionId'])) {
            $model->backupRegionId = $map['BackupRegionId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['MachineRemark'])) {
            $model->machineRemark = $map['MachineRemark'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
