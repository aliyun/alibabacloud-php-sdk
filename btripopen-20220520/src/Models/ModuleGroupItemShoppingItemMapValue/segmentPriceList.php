<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\segmentPriceList\searchPrice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleGroupItemShoppingItemMapValue\segmentPriceList\segmentPosition;
use AlibabaCloud\Tea\Model;

class segmentPriceList extends Model
{
    /**
     * @var segmentPosition
     */
    public $segmentPosition;

    /**
     * @var searchPrice
     */
    public $searchPrice;
    protected $_name = [
        'segmentPosition' => 'segment_position',
        'searchPrice'     => 'search_price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segmentPosition) {
            $res['segment_position'] = null !== $this->segmentPosition ? $this->segmentPosition->toMap() : null;
        }
        if (null !== $this->searchPrice) {
            $res['search_price'] = null !== $this->searchPrice ? $this->searchPrice->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentPriceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['segment_position'])) {
            $model->segmentPosition = segmentPosition::fromMap($map['segment_position']);
        }
        if (isset($map['search_price'])) {
            $model->searchPrice = searchPrice::fromMap($map['search_price']);
        }

        return $model;
    }
}
