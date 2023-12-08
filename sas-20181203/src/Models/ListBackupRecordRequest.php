<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListBackupRecordRequest extends Model
{
    /**
     * @description The timestamp when the backup task ended. Unit: milliseconds.
     *
     * @example 1699600611000
     *
     * @var int
     */
    public $backupEndTime;

    /**
     * @description The timestamp when the backup task started. Unit: milliseconds.
     *
     * @example 1699514211000
     *
     * @var int
     */
    public $backupStartTime;

    /**
     * @description The page number. Default value: **1**. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The information that you want to use to identify the servers protected by the anti-ransomware policy. You can enter the IP address or ID of a server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $machineRemark;

    /**
     * @description The number of entries per page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The backup task status. Valid values:
     *
     *   **BACKUP_COMPLETE**: The backup task is successful.
     *   **BACKUP_FAILED**: The backup task failed.
     *   **PARTIAL_COMPLETE**: The backup task is partially successful.
     *
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupStartTime' => 'BackupStartTime',
        'currentPage'     => 'CurrentPage',
        'machineRemark'   => 'MachineRemark',
        'pageSize'        => 'PageSize',
        'statusList'      => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
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
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBackupRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
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
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
