<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivitiesResponseBody\scalingActivities;
use AlibabaCloud\Tea\Model;

class DescribeScalingActivitiesResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example CC107349-57B7-4405-B1BF-9BF5AF7F2A46
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the scaling activities.
     *
     * @var scalingActivities[]
     */
    public $scalingActivities;

    /**
     * @description The total number of scaling activities.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'scalingActivities' => 'ScalingActivities',
        'totalCount'        => 'TotalCount',
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
        if (null !== $this->scalingActivities) {
            $res['ScalingActivities'] = [];
            if (null !== $this->scalingActivities && \is_array($this->scalingActivities)) {
                $n = 0;
                foreach ($this->scalingActivities as $item) {
                    $res['ScalingActivities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingActivitiesResponseBody
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
        if (isset($map['ScalingActivities'])) {
            if (!empty($map['ScalingActivities'])) {
                $model->scalingActivities = [];
                $n                        = 0;
                foreach ($map['ScalingActivities'] as $item) {
                    $model->scalingActivities[$n++] = null !== $item ? scalingActivities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
