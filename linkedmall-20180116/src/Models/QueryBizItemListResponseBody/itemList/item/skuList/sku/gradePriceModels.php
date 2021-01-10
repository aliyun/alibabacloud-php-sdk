<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemListResponseBody\itemList\item\skuList\sku\gradePriceModels\gradePriceModel;
use AlibabaCloud\Tea\Model;

class gradePriceModels extends Model
{
    /**
     * @var gradePriceModel[]
     */
    public $gradePriceModel;
    protected $_name = [
        'gradePriceModel' => 'GradePriceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gradePriceModel) {
            $res['GradePriceModel'] = [];
            if (null !== $this->gradePriceModel && \is_array($this->gradePriceModel)) {
                $n = 0;
                foreach ($this->gradePriceModel as $item) {
                    $res['GradePriceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gradePriceModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GradePriceModel'])) {
            if (!empty($map['GradePriceModel'])) {
                $model->gradePriceModel = [];
                $n                      = 0;
                foreach ($map['GradePriceModel'] as $item) {
                    $model->gradePriceModel[$n++] = null !== $item ? gradePriceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
