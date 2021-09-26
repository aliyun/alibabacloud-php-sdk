<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterOperationResponseBody\clusterOperationList;
use AlibabaCloud\Tea\Model;

class ListClusterOperationResponseBody extends Model
{
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
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var clusterOperationList
     */
    public $clusterOperationList;
    protected $_name = [
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'totalCount'           => 'TotalCount',
        'clusterOperationList' => 'ClusterOperationList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->clusterOperationList) {
            $res['ClusterOperationList'] = null !== $this->clusterOperationList ? $this->clusterOperationList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterOperationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ClusterOperationList'])) {
            $model->clusterOperationList = clusterOperationList::fromMap($map['ClusterOperationList']);
        }

        return $model;
    }
}
