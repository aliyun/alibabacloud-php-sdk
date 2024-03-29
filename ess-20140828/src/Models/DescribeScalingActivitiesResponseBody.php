<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingActivitiesResponseBody\scalingActivities;
use AlibabaCloud\Tea\Model;

class DescribeScalingActivitiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var scalingActivities
     */
    public $scalingActivities;
    protected $_name = [
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'totalCount'        => 'TotalCount',
        'scalingActivities' => 'ScalingActivities',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->scalingActivities) {
            $res['ScalingActivities'] = null !== $this->scalingActivities ? $this->scalingActivities->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['ScalingActivities'])) {
            $model->scalingActivities = scalingActivities::fromMap($map['ScalingActivities']);
        }

        return $model;
    }
}
