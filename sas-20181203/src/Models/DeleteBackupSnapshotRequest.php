<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupSnapshotRequest\backupSnapshotList;

class DeleteBackupSnapshotRequest extends Model
{
    /**
     * @var string[]
     */
    public $backupRegionIdList;
    /**
     * @var backupSnapshotList[]
     */
    public $backupSnapshotList;
    /**
     * @var bool
     */
    public $retainLatestSnapshot;
    protected $_name = [
        'backupRegionIdList'   => 'BackupRegionIdList',
        'backupSnapshotList'   => 'BackupSnapshotList',
        'retainLatestSnapshot' => 'RetainLatestSnapshot',
    ];

    public function validate()
    {
        if (\is_array($this->backupRegionIdList)) {
            Model::validateArray($this->backupRegionIdList);
        }
        if (\is_array($this->backupSnapshotList)) {
            Model::validateArray($this->backupSnapshotList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupRegionIdList) {
            if (\is_array($this->backupRegionIdList)) {
                $res['BackupRegionIdList'] = [];
                $n1                        = 0;
                foreach ($this->backupRegionIdList as $item1) {
                    $res['BackupRegionIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->backupSnapshotList) {
            if (\is_array($this->backupSnapshotList)) {
                $res['BackupSnapshotList'] = [];
                $n1                        = 0;
                foreach ($this->backupSnapshotList as $item1) {
                    $res['BackupSnapshotList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->retainLatestSnapshot) {
            $res['RetainLatestSnapshot'] = $this->retainLatestSnapshot;
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
        if (isset($map['BackupRegionIdList'])) {
            if (!empty($map['BackupRegionIdList'])) {
                $model->backupRegionIdList = [];
                $n1                        = 0;
                foreach ($map['BackupRegionIdList'] as $item1) {
                    $model->backupRegionIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BackupSnapshotList'])) {
            if (!empty($map['BackupSnapshotList'])) {
                $model->backupSnapshotList = [];
                $n1                        = 0;
                foreach ($map['BackupSnapshotList'] as $item1) {
                    $model->backupSnapshotList[$n1++] = backupSnapshotList::fromMap($item1);
                }
            }
        }

        if (isset($map['RetainLatestSnapshot'])) {
            $model->retainLatestSnapshot = $map['RetainLatestSnapshot'];
        }

        return $model;
    }
}
