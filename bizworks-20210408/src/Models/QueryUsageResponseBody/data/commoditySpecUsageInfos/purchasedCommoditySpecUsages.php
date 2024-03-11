<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos;

use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\purchasedCommoditySpecUsages\commoditySpec;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\purchasedCommoditySpecUsages\commodityUsage;
use AlibabaCloud\Tea\Model;

class purchasedCommoditySpecUsages extends Model
{
    /**
     * @var commoditySpec
     */
    public $commoditySpec;

    /**
     * @var commodityUsage
     */
    public $commodityUsage;
    protected $_name = [
        'commoditySpec'  => 'commoditySpec',
        'commodityUsage' => 'commodityUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commoditySpec) {
            $res['commoditySpec'] = null !== $this->commoditySpec ? $this->commoditySpec->toMap() : null;
        }
        if (null !== $this->commodityUsage) {
            $res['commodityUsage'] = null !== $this->commodityUsage ? $this->commodityUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedCommoditySpecUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commoditySpec'])) {
            $model->commoditySpec = commoditySpec::fromMap($map['commoditySpec']);
        }
        if (isset($map['commodityUsage'])) {
            $model->commodityUsage = commodityUsage::fromMap($map['commodityUsage']);
        }

        return $model;
    }
}
