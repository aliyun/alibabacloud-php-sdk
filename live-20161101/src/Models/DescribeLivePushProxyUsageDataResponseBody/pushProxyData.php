<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody\pushProxyData\pushProxyDataItem;
use AlibabaCloud\Tea\Model;

class pushProxyData extends Model
{
    /**
     * @var pushProxyDataItem[]
     */
    public $pushProxyDataItem;
    protected $_name = [
        'pushProxyDataItem' => 'PushProxyDataItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushProxyDataItem) {
            $res['PushProxyDataItem'] = [];
            if (null !== $this->pushProxyDataItem && \is_array($this->pushProxyDataItem)) {
                $n = 0;
                foreach ($this->pushProxyDataItem as $item) {
                    $res['PushProxyDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushProxyData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushProxyDataItem'])) {
            if (!empty($map['PushProxyDataItem'])) {
                $model->pushProxyDataItem = [];
                $n = 0;
                foreach ($map['PushProxyDataItem'] as $item) {
                    $model->pushProxyDataItem[$n++] = null !== $item ? pushProxyDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
