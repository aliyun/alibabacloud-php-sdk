<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData\wafUsageDataItem;
use AlibabaCloud\Tea\Model;

class wafUsageData extends Model
{
    /**
     * @var wafUsageDataItem[]
     */
    public $wafUsageDataItem;
    protected $_name = [
        'wafUsageDataItem' => 'WafUsageDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wafUsageDataItem) {
            $res['WafUsageDataItem'] = [];
            if (null !== $this->wafUsageDataItem && \is_array($this->wafUsageDataItem)) {
                $n = 0;
                foreach ($this->wafUsageDataItem as $item) {
                    $res['WafUsageDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wafUsageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WafUsageDataItem'])) {
            if (!empty($map['WafUsageDataItem'])) {
                $model->wafUsageDataItem = [];
                $n                       = 0;
                foreach ($map['WafUsageDataItem'] as $item) {
                    $model->wafUsageDataItem[$n++] = null !== $item ? wafUsageDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
