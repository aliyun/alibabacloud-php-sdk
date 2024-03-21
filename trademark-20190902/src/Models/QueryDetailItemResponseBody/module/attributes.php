<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody\module;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryDetailItemResponseBody\module\attributes\attribute;
use AlibabaCloud\Tea\Model;

class attributes extends Model
{
    /**
     * @var attribute[]
     */
    public $attribute;
    protected $_name = [
        'attribute' => 'attribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = [];
            if (null !== $this->attribute && \is_array($this->attribute)) {
                $n = 0;
                foreach ($this->attribute as $item) {
                    $res['attribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            if (!empty($map['attribute'])) {
                $model->attribute = [];
                $n                = 0;
                foreach ($map['attribute'] as $item) {
                    $model->attribute[$n++] = null !== $item ? attribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
