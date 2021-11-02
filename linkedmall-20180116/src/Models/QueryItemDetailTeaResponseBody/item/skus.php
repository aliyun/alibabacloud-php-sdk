<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailTeaResponseBody\item\skus\sku;
use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @var sku[]
     */
    public $sku;
    protected $_name = [
        'sku' => 'Sku',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sku) {
            $res['Sku'] = [];
            if (null !== $this->sku && \is_array($this->sku)) {
                $n = 0;
                foreach ($this->sku as $item) {
                    $res['Sku'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sku'])) {
            if (!empty($map['Sku'])) {
                $model->sku = [];
                $n          = 0;
                foreach ($map['Sku'] as $item) {
                    $model->sku[$n++] = null !== $item ? sku::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
