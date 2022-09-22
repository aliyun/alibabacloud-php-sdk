<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateOrderResponseBody\relatedOrderItemSets\relatedOrderItemSet;

use AlibabaCloud\Tea\Model;

class relatedOrderIds extends Model
{
    /**
     * @var string[]
     */
    public $relatedOrderId;
    protected $_name = [
        'relatedOrderId' => 'RelatedOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedOrderId) {
            $res['RelatedOrderId'] = $this->relatedOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedOrderIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedOrderId'])) {
            if (!empty($map['RelatedOrderId'])) {
                $model->relatedOrderId = $map['RelatedOrderId'];
            }
        }

        return $model;
    }
}
