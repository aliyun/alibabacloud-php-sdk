<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets\relatedOrderItemSet;
use AlibabaCloud\Tea\Model;

class relatedOrderItemSets extends Model
{
    /**
     * @var relatedOrderItemSet[]
     */
    public $relatedOrderItemSet;
    protected $_name = [
        'relatedOrderItemSet' => 'RelatedOrderItemSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedOrderItemSet) {
            $res['RelatedOrderItemSet'] = [];
            if (null !== $this->relatedOrderItemSet && \is_array($this->relatedOrderItemSet)) {
                $n = 0;
                foreach ($this->relatedOrderItemSet as $item) {
                    $res['RelatedOrderItemSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedOrderItemSets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedOrderItemSet'])) {
            if (!empty($map['RelatedOrderItemSet'])) {
                $model->relatedOrderItemSet = [];
                $n                          = 0;
                foreach ($map['RelatedOrderItemSet'] as $item) {
                    $model->relatedOrderItemSet[$n++] = null !== $item ? relatedOrderItemSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
