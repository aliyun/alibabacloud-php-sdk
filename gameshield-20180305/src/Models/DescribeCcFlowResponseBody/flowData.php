<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcFlowResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcFlowResponseBody\flowData\items;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcFlowResponseBody\flowData\timeScope;
use AlibabaCloud\Tea\Model;

class flowData extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var timeScope
     */
    public $timeScope;

    /**
     * @var string
     */
    public $categoriesType;
    protected $_name = [
        'items'          => 'Items',
        'categories'     => 'Categories',
        'timeScope'      => 'TimeScope',
        'categoriesType' => 'CategoriesType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->timeScope) {
            $res['TimeScope'] = null !== $this->timeScope ? $this->timeScope->toMap() : null;
        }
        if (null !== $this->categoriesType) {
            $res['CategoriesType'] = $this->categoriesType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = $map['Categories'];
            }
        }
        if (isset($map['TimeScope'])) {
            $model->timeScope = timeScope::fromMap($map['TimeScope']);
        }
        if (isset($map['CategoriesType'])) {
            $model->categoriesType = $map['CategoriesType'];
        }

        return $model;
    }
}
