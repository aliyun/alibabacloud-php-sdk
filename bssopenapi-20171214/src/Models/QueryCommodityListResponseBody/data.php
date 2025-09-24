<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCommodityListResponseBody\data\commodityList;

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
        if (\is_array($this->commodityList)) {
            Model::validateArray($this->commodityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityList) {
            if (\is_array($this->commodityList)) {
                $res['CommodityList'] = [];
                $n1 = 0;
                foreach ($this->commodityList as $item1) {
                    $res['CommodityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityList'])) {
            if (!empty($map['CommodityList'])) {
                $model->commodityList = [];
                $n1 = 0;
                foreach ($map['CommodityList'] as $item1) {
                    $model->commodityList[$n1] = commodityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
