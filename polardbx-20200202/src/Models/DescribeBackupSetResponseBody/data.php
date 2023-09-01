<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBackupSetResponseBody\data\OSSList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $backupModel;

    /**
     * @example 111
     *
     * @var int
     */
    public $backupSetId;

    /**
     * @example 88803195
     *
     * @var int
     */
    public $backupSetSize;

    /**
     * @example 1
     *
     * @var int
     */
    public $backupType;

    /**
     * @example 1650250861754
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1650251308000
     *
     * @var int
     */
    public $endTime;

    /**
     * @var OSSList[]
     */
    public $OSSList;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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
            $res['OSSList'] = [];
            if (null !== $this->OSSList && \is_array($this->OSSList)) {
                $n = 0;
                foreach ($this->OSSList as $item) {
                    $res['OSSList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
                $n              = 0;
                foreach ($map['OSSList'] as $item) {
                    $model->OSSList[$n++] = null !== $item ? OSSList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
