<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostClustersResponseBody extends Model
{
    /**
     * @description An array consisting of host group information.
     *
     * @var dedicatedHostClusters
     */
    public $dedicatedHostClusters;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 214A2187-B06F-4E49-A081-4D053466A8C7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of dedicated host clusters.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dedicatedHostClusters' => 'DedicatedHostClusters',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostClusters) {
            $res['DedicatedHostClusters'] = null !== $this->dedicatedHostClusters ? $this->dedicatedHostClusters->toMap() : null;
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
     * @return DescribeDedicatedHostClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostClusters'])) {
            $model->dedicatedHostClusters = dedicatedHostClusters::fromMap($map['DedicatedHostClusters']);
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
