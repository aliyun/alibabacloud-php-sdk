<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListAutoSnapshotPolicyAppliedDbfsResponseBody;

use AlibabaCloud\Tea\Model;

class dbfsList extends Model
{
    /**
     * @example dbfs-ejdvesb0qvuywvg*******
     *
     * @var string
     */
    public $fsId;

    /**
     * @example test
     *
     * @var string
     */
    public $fsName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 20
     *
     * @var int
     */
    public $sizeG;

    /**
     * @var string
     */
    public $snapshotCount;

    /**
     * @example attached
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $totalSize;
    protected $_name = [
        'fsId'          => 'FsId',
        'fsName'        => 'FsName',
        'regionId'      => 'RegionId',
        'sizeG'         => 'SizeG',
        'snapshotCount' => 'SnapshotCount',
        'status'        => 'Status',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbfsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
