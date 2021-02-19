<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingInstancesResponseBody\scalingInstances;
use AlibabaCloud\Tea\Model;

class DescribeScalingInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;

    /**
     * @var scalingInstances
     */
    public $scalingInstances;

    /**
     * @var int
     */
    public $totalSpotCount;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'requestId'        => 'RequestId',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'scalingInstances' => 'ScalingInstances',
        'totalSpotCount'   => 'TotalSpotCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->scalingInstances) {
            $res['ScalingInstances'] = null !== $this->scalingInstances ? $this->scalingInstances->toMap() : null;
        }
        if (null !== $this->totalSpotCount) {
            $res['TotalSpotCount'] = $this->totalSpotCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ScalingInstances'])) {
            $model->scalingInstances = scalingInstances::fromMap($map['ScalingInstances']);
        }
        if (isset($map['TotalSpotCount'])) {
            $model->totalSpotCount = $map['TotalSpotCount'];
        }

        return $model;
    }
}
