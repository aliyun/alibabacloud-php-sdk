<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;
use AlibabaCloud\Tea\Model;

class DescribeCenInterRegionBandwidthLimitsResponseBody extends Model
{
    /**
     * @var cenInterRegionBandwidthLimits[]
     */
    public $cenInterRegionBandwidthLimits;

    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;
    protected $_name = [
        'cenInterRegionBandwidthLimits' => 'CenInterRegionBandwidthLimits',
        'totalCount'                    => 'TotalCount',
        'pageSize'                      => 'PageSize',
        'requestId'                     => 'RequestId',
        'pageNumber'                    => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenInterRegionBandwidthLimits) {
            $res['CenInterRegionBandwidthLimits'] = [];
            if (null !== $this->cenInterRegionBandwidthLimits && \is_array($this->cenInterRegionBandwidthLimits)) {
                $n = 0;
                foreach ($this->cenInterRegionBandwidthLimits as $item) {
                    $res['CenInterRegionBandwidthLimits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
            if (!empty($map['CenInterRegionBandwidthLimits'])) {
                $model->cenInterRegionBandwidthLimits = [];
                $n                                    = 0;
                foreach ($map['CenInterRegionBandwidthLimits'] as $item) {
                    $model->cenInterRegionBandwidthLimits[$n++] = null !== $item ? cenInterRegionBandwidthLimits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
