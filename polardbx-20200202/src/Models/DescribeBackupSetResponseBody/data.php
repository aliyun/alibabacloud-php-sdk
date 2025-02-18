<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody\data\OSSList;

class data extends Model
{
    /**
     * @var int
     */
    public $backupModel;
    /**
     * @var int
     */
    public $backupSetId;
    /**
     * @var int
     */
    public $backupSetSize;
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
    public $endTime;
    /**
     * @var OSSList[]
     */
    public $OSSList;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'backupModel'   => 'BackupModel',
        'backupSetId'   => 'BackupSetId',
        'backupSetSize' => 'BackupSetSize',
        'backupType'    => 'BackupType',
        'beginTime'     => 'BeginTime',
        'endTime'       => 'EndTime',
        'OSSList'       => 'OSSList',
        'status'        => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->OSSList)) {
            Model::validateArray($this->OSSList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupModel) {
            $res['BackupModel'] = $this->backupModel;
        }

        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->backupSetSize) {
            $res['BackupSetSize'] = $this->backupSetSize;
        }

        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->OSSList) {
            if (\is_array($this->OSSList)) {
                $res['OSSList'] = [];
                $n1             = 0;
                foreach ($this->OSSList as $item1) {
                    $res['OSSList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BackupModel'])) {
            $model->backupModel = $map['BackupModel'];
        }

        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['BackupSetSize'])) {
            $model->backupSetSize = $map['BackupSetSize'];
        }

        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['OSSList'])) {
            if (!empty($map['OSSList'])) {
                $model->OSSList = [];
                $n1             = 0;
                foreach ($map['OSSList'] as $item1) {
                    $model->OSSList[$n1++] = OSSList::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
