<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePushProxyUsageDataResponseBody\pushProxyData\pushProxyDataItem;

class pushProxyData extends Model
{
    /**
     * @var pushProxyDataItem[]
     */
    public $pushProxyDataItem;
    protected $_name = [
        'pushProxyDataItem' => 'PushProxyDataItem',
    ];

    public function validate()
    {
        if (\is_array($this->pushProxyDataItem)) {
            Model::validateArray($this->pushProxyDataItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushProxyDataItem) {
            if (\is_array($this->pushProxyDataItem)) {
                $res['PushProxyDataItem'] = [];
                $n1 = 0;
                foreach ($this->pushProxyDataItem as $item1) {
                    $res['PushProxyDataItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushProxyDataItem'])) {
            if (!empty($map['PushProxyDataItem'])) {
                $model->pushProxyDataItem = [];
                $n1 = 0;
                foreach ($map['PushProxyDataItem'] as $item1) {
                    $model->pushProxyDataItem[$n1] = pushProxyDataItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
