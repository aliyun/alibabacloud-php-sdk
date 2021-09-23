<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotTasksResponseBody\autoSnapshotTasks;
use AlibabaCloud\Tea\Model;

class DescribeAutoSnapshotTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var autoSnapshotTasks
     */
    public $autoSnapshotTasks;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'autoSnapshotTasks' => 'AutoSnapshotTasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->autoSnapshotTasks) {
            $res['AutoSnapshotTasks'] = null !== $this->autoSnapshotTasks ? $this->autoSnapshotTasks->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoSnapshotTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AutoSnapshotTasks'])) {
            $model->autoSnapshotTasks = autoSnapshotTasks::fromMap($map['AutoSnapshotTasks']);
        }

        return $model;
    }
}
