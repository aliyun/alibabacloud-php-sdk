<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetsSecurityEventSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The type of the asset. Valid values:
     *
     *   **namespace**
     *   **clusters**
     *   **applications**
     *   **pods**
     *   **containers**
     *   **images**
     *   **hosts**
     *
     * @example namespace
     *
     * @var string
     */
    public $assetType;

    /**
     * @description The number of potential risky assets.
     *
     * @example 16
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The total number of assets.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'assetType'  => 'AssetType',
        'riskCount'  => 'RiskCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
