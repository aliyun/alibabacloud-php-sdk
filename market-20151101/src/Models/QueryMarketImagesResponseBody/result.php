<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var imageProduct[]
     */
    public $imageProduct;
    protected $_name = [
        'imageProduct' => 'ImageProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageProduct) {
            $res['ImageProduct'] = [];
            if (null !== $this->imageProduct && \is_array($this->imageProduct)) {
                $n = 0;
                foreach ($this->imageProduct as $item) {
                    $res['ImageProduct'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageProduct'])) {
            if (!empty($map['ImageProduct'])) {
                $model->imageProduct = [];
                $n                   = 0;
                foreach ($map['ImageProduct'] as $item) {
                    $model->imageProduct[$n++] = null !== $item ? imageProduct::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
