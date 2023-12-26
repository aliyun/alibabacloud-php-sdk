<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotTasksRequest extends Model
{
    /**
     * @description The IDs of automatic snapshot policies.
     *
     * You can specify a maximum of 100 policy IDs. If you want to query the tasks of multiple automatic snapshot policies, you must separate the policy IDs with commas (,).
     * @example sp-extreme-233e6****,sp-extreme-233e6****, sp-extreme-233e6****
     *
     * @var string
     */
    public $autoSnapshotPolicyIds;

    /**
     * @description The ID of the file system.
     *
     * You can specify a maximum of 100 file system IDs. If you want to query the snapshots of multiple file systems, you must separate the file system IDs with commas (,).
     * @example extreme-233e6****,extreme -23vbp****,extreme -23vas****
     *
     * @var string
     */
    public $fileSystemIds;

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
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'autoSnapshotPolicyIds' => 'AutoSnapshotPolicyIds',
        'fileSystemIds'         => 'FileSystemIds',
        'fileSystemType'        => 'FileSystemType',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyIds) {
            $res['AutoSnapshotPolicyIds'] = $this->autoSnapshotPolicyIds;
        }
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyIds'])) {
            $model->autoSnapshotPolicyIds = $map['AutoSnapshotPolicyIds'];
        }
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
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

        return $model;
    }
}
