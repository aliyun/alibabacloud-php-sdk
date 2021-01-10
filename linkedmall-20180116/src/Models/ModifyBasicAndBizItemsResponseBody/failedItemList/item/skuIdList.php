<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsResponseBody\failedItemList\item;

use AlibabaCloud\Tea\Model;

class skuIdList extends Model
{
    /**
     * @var string[]
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
            $res['Sku'] = $this->sku;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sku'])) {
            if (!empty($map['Sku'])) {
                $model->sku = $map['Sku'];
            }
        }

        return $model;
    }
}
