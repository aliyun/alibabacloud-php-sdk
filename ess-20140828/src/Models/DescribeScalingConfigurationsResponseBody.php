<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;
use AlibabaCloud\Tea\Model;

class DescribeScalingConfigurationsResponseBody extends Model
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
     * @var scalingConfigurations
     */
    public $scalingConfigurations;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'requestId'             => 'RequestId',
        'pageSize'              => 'PageSize',
        'pageNumber'            => 'PageNumber',
        'scalingConfigurations' => 'ScalingConfigurations',
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
        if (null !== $this->scalingConfigurations) {
            $res['ScalingConfigurations'] = null !== $this->scalingConfigurations ? $this->scalingConfigurations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingConfigurationsResponseBody
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
        if (isset($map['ScalingConfigurations'])) {
            $model->scalingConfigurations = scalingConfigurations::fromMap($map['ScalingConfigurations']);
        }

        return $model;
    }
}
