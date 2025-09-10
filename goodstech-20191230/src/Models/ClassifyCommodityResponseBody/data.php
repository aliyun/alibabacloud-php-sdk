<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Goodstech\V20191230\Models\ClassifyCommodityResponseBody\data\categories;

class data extends Model
{
    /**
     * @var categories[]
     */
    public $categories;
    protected $_name = [
        'categories' => 'Categories',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1] = categories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
