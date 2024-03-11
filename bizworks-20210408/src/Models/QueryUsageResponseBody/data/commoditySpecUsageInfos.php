<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data;

use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\commodityConfig;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\commoditySpecUsageInfos\purchasedCommoditySpecUsages;
use AlibabaCloud\Tea\Model;

class commoditySpecUsageInfos extends Model
{
    /**
     * @var commodityConfig
     */
    public $commodityConfig;

    /**
     * @var purchasedCommoditySpecUsages[]
     */
    public $purchasedCommoditySpecUsages;
    protected $_name = [
        'commodityConfig'              => 'commodityConfig',
        'purchasedCommoditySpecUsages' => 'purchasedCommoditySpecUsages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityConfig) {
            $res['commodityConfig'] = null !== $this->commodityConfig ? $this->commodityConfig->toMap() : null;
        }
        if (null !== $this->purchasedCommoditySpecUsages) {
            $res['purchasedCommoditySpecUsages'] = [];
            if (null !== $this->purchasedCommoditySpecUsages && \is_array($this->purchasedCommoditySpecUsages)) {
                $n = 0;
                foreach ($this->purchasedCommoditySpecUsages as $item) {
                    $res['purchasedCommoditySpecUsages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commoditySpecUsageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commodityConfig'])) {
            $model->commodityConfig = commodityConfig::fromMap($map['commodityConfig']);
        }
        if (isset($map['purchasedCommoditySpecUsages'])) {
            if (!empty($map['purchasedCommoditySpecUsages'])) {
                $model->purchasedCommoditySpecUsages = [];
                $n                                   = 0;
                foreach ($map['purchasedCommoditySpecUsages'] as $item) {
                    $model->purchasedCommoditySpecUsages[$n++] = null !== $item ? purchasedCommoditySpecUsages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
