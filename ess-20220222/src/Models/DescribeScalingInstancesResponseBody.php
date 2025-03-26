<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingInstancesResponseBody\scalingInstances;

class DescribeScalingInstancesResponseBody extends Model
{
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
     * @var scalingInstances[]
     */
    public $scalingInstances;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalSpotCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'scalingInstances' => 'ScalingInstances',
        'totalCount' => 'TotalCount',
        'totalSpotCount' => 'TotalSpotCount',
    ];

    public function validate()
    {
        if (\is_array($this->scalingInstances)) {
            Model::validateArray($this->scalingInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->scalingInstances)) {
                $res['ScalingInstances'] = [];
                $n1 = 0;
                foreach ($this->scalingInstances as $item1) {
                    $res['ScalingInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ScalingInstances'] as $item1) {
                    $model->scalingInstances[$n1++] = scalingInstances::fromMap($item1);
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
