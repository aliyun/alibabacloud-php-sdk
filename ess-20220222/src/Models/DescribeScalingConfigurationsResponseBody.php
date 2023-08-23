<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;
use AlibabaCloud\Tea\Model;

class DescribeScalingConfigurationsResponseBody extends Model
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
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details of the scaling configurations.
     *
     * @var scalingConfigurations[]
     */
    public $scalingConfigurations;

    /**
     * @description The total number of scaling configurations.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'scalingConfigurations' => 'ScalingConfigurations',
        'totalCount'            => 'TotalCount',
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
        if (null !== $this->scalingConfigurations) {
            $res['ScalingConfigurations'] = [];
            if (null !== $this->scalingConfigurations && \is_array($this->scalingConfigurations)) {
                $n = 0;
                foreach ($this->scalingConfigurations as $item) {
                    $res['ScalingConfigurations'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeScalingConfigurationsResponseBody
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
        if (isset($map['ScalingConfigurations'])) {
            if (!empty($map['ScalingConfigurations'])) {
                $model->scalingConfigurations = [];
                $n                            = 0;
                foreach ($map['ScalingConfigurations'] as $item) {
                    $model->scalingConfigurations[$n++] = null !== $item ? scalingConfigurations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
