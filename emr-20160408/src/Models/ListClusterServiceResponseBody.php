<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterServiceResponseBody\clusterServiceList;
use AlibabaCloud\Tea\Model;

class ListClusterServiceResponseBody extends Model
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
     * @var clusterServiceList
     */
    public $clusterServiceList;
    protected $_name = [
        'totalCount'         => 'TotalCount',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'pageNumber'         => 'PageNumber',
        'clusterServiceList' => 'ClusterServiceList',
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
        if (null !== $this->clusterServiceList) {
            $res['ClusterServiceList'] = null !== $this->clusterServiceList ? $this->clusterServiceList->toMap() : null;
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
        if (isset($map['ClusterServiceList'])) {
            $model->clusterServiceList = clusterServiceList::fromMap($map['ClusterServiceList']);
        }

        return $model;
    }
}
