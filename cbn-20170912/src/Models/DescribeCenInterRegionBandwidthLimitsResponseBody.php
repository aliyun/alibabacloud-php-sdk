<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;

class DescribeCenInterRegionBandwidthLimitsResponseBody extends Model
{
    /**
     * @var cenInterRegionBandwidthLimits
     */
    public $cenInterRegionBandwidthLimits;

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
        'cenInterRegionBandwidthLimits' => 'CenInterRegionBandwidthLimits',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->cenInterRegionBandwidthLimits) {
            $this->cenInterRegionBandwidthLimits->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenInterRegionBandwidthLimits) {
            $res['CenInterRegionBandwidthLimits'] = null !== $this->cenInterRegionBandwidthLimits ? $this->cenInterRegionBandwidthLimits->toArray($noStream) : $this->cenInterRegionBandwidthLimits;
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
