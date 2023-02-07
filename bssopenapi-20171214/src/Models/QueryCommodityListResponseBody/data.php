<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponseBody\data\commodityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var commodityList[]
     */
    public $commodityList;
    protected $_name = [
        'commodityList' => 'CommodityList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityList) {
            $res['CommodityList'] = [];
            if (null !== $this->commodityList && \is_array($this->commodityList)) {
                $n = 0;
                foreach ($this->commodityList as $item) {
                    $res['CommodityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityList'])) {
            if (!empty($map['CommodityList'])) {
                $model->commodityList = [];
                $n                    = 0;
                foreach ($map['CommodityList'] as $item) {
                    $model->commodityList[$n++] = null !== $item ? commodityList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
