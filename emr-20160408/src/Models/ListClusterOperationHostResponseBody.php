<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterOperationHostResponseBody\clusterOperationHostList;
use AlibabaCloud\Tea\Model;

class ListClusterOperationHostResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
     * @var clusterOperationHostList
     */
    public $clusterOperationHostList;
    protected $_name = [
        'totalCount'               => 'TotalCount',
        'pageSize'                 => 'PageSize',
        'requestId'                => 'RequestId',
        'pageNumber'               => 'PageNumber',
        'clusterOperationHostList' => 'ClusterOperationHostList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->clusterOperationHostList) {
            $res['ClusterOperationHostList'] = null !== $this->clusterOperationHostList ? $this->clusterOperationHostList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterOperationHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ClusterOperationHostList'])) {
            $model->clusterOperationHostList = clusterOperationHostList::fromMap($map['ClusterOperationHostList']);
        }

        return $model;
    }
}
