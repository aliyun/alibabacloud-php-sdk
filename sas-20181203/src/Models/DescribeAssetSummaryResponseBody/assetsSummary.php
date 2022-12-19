<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class assetsSummary extends Model
{
    /**
     * @description The total number of protected assets in all regions.
     *
     * @example 2064
     *
     * @var int
     */
    public $totalAssetAllRegion;

    /**
     * @description The total number of cores of protected assets in all regions.
     *
     * @example 3200
     *
     * @var int
     */
    public $totalCoreAllRegion;

    /**
     * @description The total number of cores of protected assets in the current region.
     *
     * @example 1022
     *
     * @var int
     */
    public $totalCoreNum;
    protected $_name = [
        'totalAssetAllRegion' => 'TotalAssetAllRegion',
        'totalCoreAllRegion'  => 'TotalCoreAllRegion',
        'totalCoreNum'        => 'TotalCoreNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalAssetAllRegion) {
            $res['TotalAssetAllRegion'] = $this->totalAssetAllRegion;
        }
        if (null !== $this->totalCoreAllRegion) {
            $res['TotalCoreAllRegion'] = $this->totalCoreAllRegion;
        }
        if (null !== $this->totalCoreNum) {
            $res['TotalCoreNum'] = $this->totalCoreNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetsSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalAssetAllRegion'])) {
            $model->totalAssetAllRegion = $map['TotalAssetAllRegion'];
        }
        if (isset($map['TotalCoreAllRegion'])) {
            $model->totalCoreAllRegion = $map['TotalCoreAllRegion'];
        }
        if (isset($map['TotalCoreNum'])) {
            $model->totalCoreNum = $map['TotalCoreNum'];
        }

        return $model;
    }
}
