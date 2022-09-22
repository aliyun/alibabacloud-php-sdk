<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories\diagnoseCategory\categoryItems;
use AlibabaCloud\Tea\Model;

class diagnoseCategory extends Model
{
    /**
     * @var categoryItems
     */
    public $categoryItems;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $reachable;
    protected $_name = [
        'categoryItems' => 'CategoryItems',
        'categoryName'  => 'CategoryName',
        'reachable'     => 'Reachable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryItems) {
            $res['CategoryItems'] = null !== $this->categoryItems ? $this->categoryItems->toMap() : null;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->reachable) {
            $res['Reachable'] = $this->reachable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseCategory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryItems'])) {
            $model->categoryItems = categoryItems::fromMap($map['CategoryItems']);
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['Reachable'])) {
            $model->reachable = $map['Reachable'];
        }

        return $model;
    }
}
