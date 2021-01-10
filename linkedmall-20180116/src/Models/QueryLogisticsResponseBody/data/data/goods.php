<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryLogisticsResponseBody\data\data\goods\goods;
use AlibabaCloud\Tea\Model;

class goods extends Model
{
    /**
     * @var goods[]
     */
    public $goods;
    protected $_name = [
        'goods' => 'Goods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goods) {
            $res['Goods'] = [];
            if (null !== $this->goods && \is_array($this->goods)) {
                $n = 0;
                foreach ($this->goods as $item) {
                    $res['Goods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return goods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Goods'])) {
            if (!empty($map['Goods'])) {
                $model->goods = [];
                $n            = 0;
                foreach ($map['Goods'] as $item) {
                    $model->goods[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
