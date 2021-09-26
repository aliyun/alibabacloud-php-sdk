<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingConfigItemResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingConfigItemResponseBody\items\items[]
     */
    public $items;
    protected $_name = [
        'items' => 'items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? \AlibabaCloud\SDK\Ddi\V20200617\Models\ListScalingConfigItemResponseBody\items\items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
