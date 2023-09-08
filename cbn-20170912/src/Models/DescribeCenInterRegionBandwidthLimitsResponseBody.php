<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;
use AlibabaCloud\Tea\Model;

class DescribeCenInterRegionBandwidthLimitsResponseBody extends Model
{
    /**
     * @description A list of inter-region connections.
     *
     * @var cenInterRegionBandwidthLimits
     */
    public $cenInterRegionBandwidthLimits;

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
     * @description The request ID.
     *
     * @example 7A30C665-8766-5AAA-9274-C97380E2D850
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cenInterRegionBandwidthLimits' => 'CenInterRegionBandwidthLimits',
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'requestId'                     => 'RequestId',
        'totalCount'                    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenInterRegionBandwidthLimits) {
            $res['CenInterRegionBandwidthLimits'] = null !== $this->cenInterRegionBandwidthLimits ? $this->cenInterRegionBandwidthLimits->toMap() : null;
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
     * @return DescribeCenInterRegionBandwidthLimitsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenInterRegionBandwidthLimits'])) {
            $model->cenInterRegionBandwidthLimits = cenInterRegionBandwidthLimits::fromMap($map['CenInterRegionBandwidthLimits']);
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
