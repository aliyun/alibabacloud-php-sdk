<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeSnapshotsRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example extreme-22f****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The type of the file system.
     *
     * Valid value: extreme, which indicates Extreme NAS file systems.
     * @example extreme
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The snapshot IDs.
     *
     * You can specify a maximum of 100 snapshot IDs. You must separate snapshot IDs with commas (,).
     * @example s-extreme-67pxwk9aevrkr****,s-extreme-snapsho****,s-extreme-6tmsbas6ljhwh****
     *
     * @var string
     */
    public $snapshotIds;

    /**
     * @description The snapshot name.
     *
     * @example FinanceJoshua
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description The type of the snapshot.
     *
     * Valid values:
     *
     *   auto: auto snapshot
     *   user: manual snapshot
     *   all (default): all snapshot types
     *
     * @example all
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The status of the snapshot.
     *
     * Valid values:
     *
     *   progressing: The snapshot is being created.
     *   accomplished: The snapshot is created.
     *   failed: The snapshot fails to be created.
     *   all (default): all snapshot states.
     *
     * @example all
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'fileSystemId'   => 'FileSystemId',
        'fileSystemType' => 'FileSystemType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'snapshotIds'    => 'SnapshotIds',
        'snapshotName'   => 'SnapshotName',
        'snapshotType'   => 'SnapshotType',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SnapshotIds'])) {
            $model->snapshotIds = $map['SnapshotIds'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
