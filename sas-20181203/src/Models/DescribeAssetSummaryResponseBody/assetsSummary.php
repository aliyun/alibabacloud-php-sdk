<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class assetsSummary extends Model
{
    /**
     * @var int
     */
    public $totalCoreNum;
    protected $_name = [
        'totalCoreNum' => 'TotalCoreNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['TotalCoreNum'])) {
            $model->totalCoreNum = $map['TotalCoreNum'];
        }

        return $model;
    }
}
