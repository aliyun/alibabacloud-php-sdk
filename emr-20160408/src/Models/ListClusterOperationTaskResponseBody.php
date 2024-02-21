<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationTaskResponseBody\clusterOperationTaskList;
use AlibabaCloud\Tea\Model;

class ListClusterOperationTaskResponseBody extends Model
{
    /**
     * @var clusterOperationTaskList
     */
    public $clusterOperationTaskList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1320AD6F-45A5-4FC6-B5EA-A0A4B86AD8B4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'clusterOperationTaskList' => 'ClusterOperationTaskList',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'requestId'                => 'RequestId',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterOperationTaskList) {
            $res['ClusterOperationTaskList'] = null !== $this->clusterOperationTaskList ? $this->clusterOperationTaskList->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterOperationTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterOperationTaskList'])) {
            $model->clusterOperationTaskList = clusterOperationTaskList::fromMap($map['ClusterOperationTaskList']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
