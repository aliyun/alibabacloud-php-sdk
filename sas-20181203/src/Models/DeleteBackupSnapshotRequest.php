<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupSnapshotRequest\backupSnapshotList;
use AlibabaCloud\Tea\Model;

class DeleteBackupSnapshotRequest extends Model
{
    /**
     * @description The regions for backup.
     *
     * @var string[]
     */
    public $backupRegionIdList;

    /**
     * @description The backup snapshots.
     *
     * @var backupSnapshotList[]
     */
    public $backupSnapshotList;

    /**
     * @description Specifies whether to retain the latest snapshot. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $retainLatestSnapshot;
    protected $_name = [
        'backupRegionIdList' => 'BackupRegionIdList',
        'backupSnapshotList' => 'BackupSnapshotList',
        'retainLatestSnapshot' => 'RetainLatestSnapshot',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupRegionIdList) {
            $res['BackupRegionIdList'] = $this->backupRegionIdList;
        }
        if (null !== $this->backupSnapshotList) {
            $res['BackupSnapshotList'] = [];
            if (null !== $this->backupSnapshotList && \is_array($this->backupSnapshotList)) {
                $n = 0;
                foreach ($this->backupSnapshotList as $item) {
                    $res['BackupSnapshotList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->retainLatestSnapshot) {
            $res['RetainLatestSnapshot'] = $this->retainLatestSnapshot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupRegionIdList'])) {
            if (!empty($map['BackupRegionIdList'])) {
                $model->backupRegionIdList = $map['BackupRegionIdList'];
            }
        }
        if (isset($map['BackupSnapshotList'])) {
            if (!empty($map['BackupSnapshotList'])) {
                $model->backupSnapshotList = [];
                $n = 0;
                foreach ($map['BackupSnapshotList'] as $item) {
                    $model->backupSnapshotList[$n++] = null !== $item ? backupSnapshotList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RetainLatestSnapshot'])) {
            $model->retainLatestSnapshot = $map['RetainLatestSnapshot'];
        }

        return $model;
    }
}
