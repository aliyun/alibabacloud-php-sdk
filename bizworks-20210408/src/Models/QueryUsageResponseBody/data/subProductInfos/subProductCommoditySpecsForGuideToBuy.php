<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos;

use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos\subProductCommoditySpecsForGuideToBuy\commodityConfig;
use AlibabaCloud\SDK\BizWorks\V20210408\Models\QueryUsageResponseBody\data\subProductInfos\subProductCommoditySpecsForGuideToBuy\commoditySpec;
use AlibabaCloud\Tea\Model;

class subProductCommoditySpecsForGuideToBuy extends Model
{
    /**
     * @var commodityConfig
     */
    public $commodityConfig;

    /**
     * @var commoditySpec
     */
    public $commoditySpec;

    /**
     * @var int
     */
    public $releaseTime;
    protected $_name = [
        'commodityConfig' => 'commodityConfig',
        'commoditySpec'   => 'commoditySpec',
        'releaseTime'     => 'releaseTime',
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
        if (null !== $this->commoditySpec) {
            $res['commoditySpec'] = null !== $this->commoditySpec ? $this->commoditySpec->toMap() : null;
        }
        if (null !== $this->releaseTime) {
            $res['releaseTime'] = $this->releaseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProductCommoditySpecsForGuideToBuy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commodityConfig'])) {
            $model->commodityConfig = commodityConfig::fromMap($map['commodityConfig']);
        }
        if (isset($map['commoditySpec'])) {
            $model->commoditySpec = commoditySpec::fromMap($map['commoditySpec']);
        }
        if (isset($map['releaseTime'])) {
            $model->releaseTime = $map['releaseTime'];
        }

        return $model;
    }
}
