<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponseBody\module;

use AlibabaCloud\SDK\Trademark\V20190902\Models\SearchItemsResponseBody\module\date\item;
use AlibabaCloud\Tea\Model;

class date extends Model
{
    /**
     * @var item[]
     */
    public $item;
    protected $_name = [
        'item' => 'item',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['item'] = [];
            if (null !== $this->item && \is_array($this->item)) {
                $n = 0;
                foreach ($this->item as $item) {
                    $res['item'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return date
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['item'])) {
            if (!empty($map['item'])) {
                $model->item = [];
                $n           = 0;
                foreach ($map['item'] as $item) {
                    $model->item[$n++] = null !== $item ? item::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
