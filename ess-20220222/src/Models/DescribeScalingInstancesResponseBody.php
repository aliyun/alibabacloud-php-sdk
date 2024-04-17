<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody\scalingInstances;
use AlibabaCloud\Tea\Model;

class DescribeScalingInstancesResponseBody extends Model
{
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
     * @example B13527BF-1FBD-4334-A512-20F5E9D3FB4D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the ECS instances.
     *
     * @var scalingInstances[]
     */
    public $scalingInstances;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalSpotCount;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'scalingInstances' => 'ScalingInstances',
        'totalCount'       => 'TotalCount',
        'totalSpotCount'   => 'TotalSpotCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingInstances) {
            $res['ScalingInstances'] = [];
            if (null !== $this->scalingInstances && \is_array($this->scalingInstances)) {
                $n = 0;
                foreach ($this->scalingInstances as $item) {
                    $res['ScalingInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingInstances'])) {
            if (!empty($map['ScalingInstances'])) {
                $model->scalingInstances = [];
                $n                       = 0;
                foreach ($map['ScalingInstances'] as $item) {
                    $model->scalingInstances[$n++] = null !== $item ? scalingInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalSpotCount'])) {
            $model->totalSpotCount = $map['TotalSpotCount'];
        }

        return $model;
    }
}
