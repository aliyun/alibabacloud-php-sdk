<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $backupSetSize;

    /**
     * @var int
     */
    public $backupSetId;

    /**
     * @var int
     */
    public $backupType;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var int
     */
    public $backupModel;
    protected $_name = [
        'endTime'       => 'EndTime',
        'status'        => 'Status',
        'backupSetSize' => 'BackupSetSize',
        'backupSetId'   => 'BackupSetId',
        'backupType'    => 'BackupType',
        'beginTime'     => 'BeginTime',
        'backupModel'   => 'BackupModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->backupSetSize) {
            $res['BackupSetSize'] = $this->backupSetSize;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->backupModel) {
            $res['BackupModel'] = $this->backupModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BackupSetSize'])) {
            $model->backupSetSize = $map['BackupSetSize'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['BackupModel'])) {
            $model->backupModel = $map['BackupModel'];
        }

        return $model;
    }
}
