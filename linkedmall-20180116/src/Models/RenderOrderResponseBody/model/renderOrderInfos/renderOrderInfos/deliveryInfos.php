<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos;

use AlibabaCloud\Tea\Model;

class deliveryInfos extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\deliveryInfos\deliveryInfos[]
     */
    public $deliveryInfos;
    protected $_name = [
        'deliveryInfos' => 'DeliveryInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryInfos) {
            $res['DeliveryInfos'] = [];
            if (null !== $this->deliveryInfos && \is_array($this->deliveryInfos)) {
                $n = 0;
                foreach ($this->deliveryInfos as $item) {
                    $res['DeliveryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryInfos'])) {
            if (!empty($map['DeliveryInfos'])) {
                $model->deliveryInfos = [];
                $n                    = 0;
                foreach ($map['DeliveryInfos'] as $item) {
                    $model->deliveryInfos[$n++] = null !== $item ? \AlibabaCloud\SDK\Linkedmall\V20180116\Models\RenderOrderResponseBody\model\renderOrderInfos\renderOrderInfos\deliveryInfos\deliveryInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
