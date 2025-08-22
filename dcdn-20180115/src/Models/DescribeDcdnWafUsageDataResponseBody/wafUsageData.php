<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData\wafUsageDataItem;

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
        if (\is_array($this->wafUsageDataItem)) {
            Model::validateArray($this->wafUsageDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wafUsageDataItem) {
            if (\is_array($this->wafUsageDataItem)) {
                $res['WafUsageDataItem'] = [];
                $n1 = 0;
                foreach ($this->wafUsageDataItem as $item1) {
                    $res['WafUsageDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['WafUsageDataItem'])) {
            if (!empty($map['WafUsageDataItem'])) {
                $model->wafUsageDataItem = [];
                $n1 = 0;
                foreach ($map['WafUsageDataItem'] as $item1) {
                    $model->wafUsageDataItem[$n1] = wafUsageDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
