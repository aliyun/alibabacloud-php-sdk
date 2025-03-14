<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAssetSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class assetsSummary extends Model
{
    /**
     * @description The total number of protected assets in all regions.
     *
     * >  Security Center supports the Hangzhou and Singapore service centers, which separately correspond to the China and Outside China data management centers. In the Hangzhou service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the China data management center. In the Singapore service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the Outside China data management center. You can determine whether the current region is covered by the China data management center or by the Outside China data management center based on the endpoint of Security Center. For more information about the supported regions for each data management center, see [What is Security Center?](https://help.aliyun.com/document_detail/42302.html)
     *
     * @example 2064
     *
     * @var int
     */
    public $totalAssetAllRegion;

    /**
     * @description The total number of cores of protected assets in all regions.
     *
     * >  Security Center supports the Hangzhou and Singapore service centers, which separately correspond to the China and Outside China data management centers. In the Hangzhou service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the China data management center. In the Singapore service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the Outside China data management center. You can determine whether the current region is covered by the China data management center or by the Outside China data management center based on the endpoint of Security Center. For more information about the supported regions for each data management center, see [What is Security Center?](https://help.aliyun.com/document_detail/42302.html)
     *
     * @example 3200
     *
     * @var int
     */
    public $totalCoreAllRegion;

    /**
     * @description The total number of cores of protected assets in the current region.
     *
     * >  Security Center supports the Hangzhou and Singapore service centers, which separately correspond to the China and Outside China data management centers. In the Hangzhou service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the China data management center. In the Singapore service center, Security Center provides protection capabilities for assets that are deployed in the regions covered by the Outside China data management center. You can determine whether the current region is covered by the China data management center or by the Outside China data management center based on the endpoint of Security Center. For more information about the supported regions for each data management center, see [What is Security Center?](https://help.aliyun.com/document_detail/42302.html)
     *
     * @example 1022
     *
     * @var int
     */
    public $totalCoreNum;
    protected $_name = [
        'totalAssetAllRegion' => 'TotalAssetAllRegion',
        'totalCoreAllRegion' => 'TotalCoreAllRegion',
        'totalCoreNum' => 'TotalCoreNum',
    ];

    public function validate() {}

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
