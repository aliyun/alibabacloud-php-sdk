<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListMixCategoriesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int[]
     */
    public $categories;
    protected $_name = [
        'categories' => 'categories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['categories'] = $this->categories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = $map['categories'];
            }
        }

        return $model;
    }
}
