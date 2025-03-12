<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponseBody\hpcClusters;
use AlibabaCloud\Tea\Model;

class DescribeHpcClustersResponseBody extends Model
{
    /**
     * @description The name of the HPC cluster.
     *
     * @var hpcClusters
     */
    public $hpcClusters;

    /**
     * @description Details about the HPC clusters. The value is an array that consists of the information of each HPC cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The page number.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of HPC clusters.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the HPC cluster.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hpcClusters' => 'HpcClusters',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpcClusters) {
            $res['HpcClusters'] = null !== $this->hpcClusters ? $this->hpcClusters->toMap() : null;
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
     * @return DescribeHpcClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpcClusters'])) {
            $model->hpcClusters = hpcClusters::fromMap($map['HpcClusters']);
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
