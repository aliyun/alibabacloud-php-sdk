<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceResponseBody\priceInfo\price\detailInfos\detailInfo;
use AlibabaCloud\Tea\Model;

class detailInfos extends Model
{
    /**
     * @var detailInfo[]
     */
    public $detailInfo;
    protected $_name = [
        'detailInfo' => 'DetailInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailInfo) {
            $res['DetailInfo'] = [];
            if (null !== $this->detailInfo && \is_array($this->detailInfo)) {
                $n = 0;
                foreach ($this->detailInfo as $item) {
                    $res['DetailInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailInfo'])) {
            if (!empty($map['DetailInfo'])) {
                $model->detailInfo = [];
                $n                 = 0;
                foreach ($map['DetailInfo'] as $item) {
                    $model->detailInfo[$n++] = null !== $item ? detailInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
