<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribePrivatePoolsResponseBody\privatePoolSet\privatePoolItem;
use AlibabaCloud\Tea\Model;

class privatePoolSet extends Model
{
    /**
     * @var privatePoolItem[]
     */
    public $privatePoolItem;
    protected $_name = [
        'privatePoolItem' => 'PrivatePoolItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolItem) {
            $res['PrivatePoolItem'] = [];
            if (null !== $this->privatePoolItem && \is_array($this->privatePoolItem)) {
                $n = 0;
                foreach ($this->privatePoolItem as $item) {
                    $res['PrivatePoolItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolItem'])) {
            if (!empty($map['PrivatePoolItem'])) {
                $model->privatePoolItem = [];
                $n                      = 0;
                foreach ($map['PrivatePoolItem'] as $item) {
                    $model->privatePoolItem[$n++] = null !== $item ? privatePoolItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
