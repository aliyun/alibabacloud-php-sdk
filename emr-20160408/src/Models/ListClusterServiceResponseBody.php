<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceResponseBody extends Model
{
    /**
     * @var clusterServiceList
     */
    public $clusterServiceList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example DF202AC2-5D5D-4288-B608-B7B1595B5C7C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 25
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'clusterServiceList' => 'ClusterServiceList',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterServiceList) {
            $res['ClusterServiceList'] = null !== $this->clusterServiceList ? $this->clusterServiceList->toMap() : null;
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
     * @return ListClusterServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterServiceList'])) {
            $model->clusterServiceList = clusterServiceList::fromMap($map['ClusterServiceList']);
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
