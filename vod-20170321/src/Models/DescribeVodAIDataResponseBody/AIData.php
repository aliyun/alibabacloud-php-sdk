<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodAIDataResponseBody\AIData\AIDataItem;
use AlibabaCloud\Tea\Model;

class AIData extends Model
{
    /**
     * @var AIDataItem[]
     */
    public $AIDataItem;
    protected $_name = [
        'AIDataItem' => 'AIDataItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIDataItem) {
            $res['AIDataItem'] = [];
            if (null !== $this->AIDataItem && \is_array($this->AIDataItem)) {
                $n = 0;
                foreach ($this->AIDataItem as $item) {
                    $res['AIDataItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIDataItem'])) {
            if (!empty($map['AIDataItem'])) {
                $model->AIDataItem = [];
                $n                 = 0;
                foreach ($map['AIDataItem'] as $item) {
                    $model->AIDataItem[$n++] = null !== $item ? AIDataItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
