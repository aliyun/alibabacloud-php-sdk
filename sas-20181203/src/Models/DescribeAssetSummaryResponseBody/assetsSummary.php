<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class assetsSummary extends Model
{
    /**
     * @var int
     */
    public $totalAssetAllRegion;

    /**
     * @var int
     */
    public $totalCoreAllRegion;

    /**
     * @var int
     */
    public $totalCoreNum;
    protected $_name = [
        'totalAssetAllRegion' => 'TotalAssetAllRegion',
        'totalCoreAllRegion' => 'TotalCoreAllRegion',
        'totalCoreNum' => 'TotalCoreNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
