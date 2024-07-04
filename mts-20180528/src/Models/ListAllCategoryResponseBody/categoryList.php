<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\ListAllCategoryResponseBody;

use AlibabaCloud\SDK\Mts\V20180528\Models\ListAllCategoryResponseBody\categoryList\category;
use AlibabaCloud\Tea\Model;

class categoryList extends Model
{
    /**
     * @var category[]
     */
    public $category;
    protected $_name = [
        'category' => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = [];
            if (null !== $this->category && \is_array($this->category)) {
                $n = 0;
                foreach ($this->category as $item) {
                    $res['Category'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            if (!empty($map['Category'])) {
                $model->category = [];
                $n               = 0;
                foreach ($map['Category'] as $item) {
                    $model->category[$n++] = null !== $item ? category::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
