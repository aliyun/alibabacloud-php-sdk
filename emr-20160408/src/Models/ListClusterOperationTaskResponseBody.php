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
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
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
