<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems\categoryItem;
use AlibabaCloud\Tea\Model;

class categoryItems extends Model
{
    /**
     * @var categoryItem[]
     */
    public $categoryItem;
    protected $_name = [
        'categoryItem' => 'CategoryItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryItem) {
            $res['CategoryItem'] = [];
            if (null !== $this->categoryItem && \is_array($this->categoryItem)) {
                $n = 0;
                foreach ($this->categoryItem as $item) {
                    $res['CategoryItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryItem'])) {
            if (!empty($map['CategoryItem'])) {
                $model->categoryItem = [];
                $n                   = 0;
                foreach ($map['CategoryItem'] as $item) {
                    $model->categoryItem[$n++] = null !== $item ? categoryItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
