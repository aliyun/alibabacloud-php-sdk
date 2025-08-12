<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory\categoryItem;

class monitorGroupCategory extends Model
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
        if (\is_array($this->categoryItem)) {
            Model::validateArray($this->categoryItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryItem) {
            if (\is_array($this->categoryItem)) {
                $res['CategoryItem'] = [];
                $n1 = 0;
                foreach ($this->categoryItem as $item1) {
                    $res['CategoryItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CategoryItem'])) {
            if (!empty($map['CategoryItem'])) {
                $model->categoryItem = [];
                $n1 = 0;
                foreach ($map['CategoryItem'] as $item1) {
                    $model->categoryItem[$n1] = categoryItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
