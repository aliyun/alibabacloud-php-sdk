<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\MobileDetectResponseBody\resultObject\items;
use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $chargeCount;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'chargeCount' => 'ChargeCount',
        'items'       => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeCount) {
            $res['ChargeCount'] = $this->chargeCount;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeCount'])) {
            $model->chargeCount = $map['ChargeCount'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
