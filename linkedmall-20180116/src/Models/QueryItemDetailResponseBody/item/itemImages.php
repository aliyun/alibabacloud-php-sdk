<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemDetailResponseBody\item;

use AlibabaCloud\Tea\Model;

class itemImages extends Model
{
    /**
     * @var string[]
     */
    public $itemImage;
    protected $_name = [
        'itemImage' => 'ItemImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemImage) {
            $res['ItemImage'] = $this->itemImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return itemImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemImage'])) {
            if (!empty($map['ItemImage'])) {
                $model->itemImage = $map['ItemImage'];
            }
        }

        return $model;
    }
}
