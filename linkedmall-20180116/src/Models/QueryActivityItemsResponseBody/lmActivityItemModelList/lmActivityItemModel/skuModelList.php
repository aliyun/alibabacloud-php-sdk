<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList\lmActivityItemModel\skuModelList\lmActivityItemSkuModel;
use AlibabaCloud\Tea\Model;

class skuModelList extends Model
{
    /**
     * @var lmActivityItemSkuModel[]
     */
    public $lmActivityItemSkuModel;
    protected $_name = [
        'lmActivityItemSkuModel' => 'LmActivityItemSkuModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lmActivityItemSkuModel) {
            $res['LmActivityItemSkuModel'] = [];
            if (null !== $this->lmActivityItemSkuModel && \is_array($this->lmActivityItemSkuModel)) {
                $n = 0;
                foreach ($this->lmActivityItemSkuModel as $item) {
                    $res['LmActivityItemSkuModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LmActivityItemSkuModel'])) {
            if (!empty($map['LmActivityItemSkuModel'])) {
                $model->lmActivityItemSkuModel = [];
                $n                             = 0;
                foreach ($map['LmActivityItemSkuModel'] as $item) {
                    $model->lmActivityItemSkuModel[$n++] = null !== $item ? lmActivityItemSkuModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
