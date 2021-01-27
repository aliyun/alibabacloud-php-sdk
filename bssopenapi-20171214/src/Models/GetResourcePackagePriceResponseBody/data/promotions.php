<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetResourcePackagePriceResponseBody\data\promotions\promotion;
use AlibabaCloud\Tea\Model;

class promotions extends Model
{
    /**
     * @var promotion[]
     */
    public $promotion;
    protected $_name = [
        'promotion' => 'Promotion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotion) {
            $res['Promotion'] = [];
            if (null !== $this->promotion && \is_array($this->promotion)) {
                $n = 0;
                foreach ($this->promotion as $item) {
                    $res['Promotion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Promotion'])) {
            if (!empty($map['Promotion'])) {
                $model->promotion = [];
                $n                = 0;
                foreach ($map['Promotion'] as $item) {
                    $model->promotion[$n++] = null !== $item ? promotion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
