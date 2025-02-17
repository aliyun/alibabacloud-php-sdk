<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostClustersResponseBody\dedicatedHostClusters;

class DescribeDedicatedHostClustersResponseBody extends Model
{
    /**
     * @var dedicatedHostClusters
     */
    public $dedicatedHostClusters;
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
        'dedicatedHostClusters' => 'DedicatedHostClusters',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->dedicatedHostClusters) {
            $this->dedicatedHostClusters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostClusters) {
            $res['DedicatedHostClusters'] = null !== $this->dedicatedHostClusters ? $this->dedicatedHostClusters->toArray($noStream) : $this->dedicatedHostClusters;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
