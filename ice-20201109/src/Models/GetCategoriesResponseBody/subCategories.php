<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetCategoriesResponseBody\subCategories\category;

class subCategories extends Model
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
        if (\is_array($this->category)) {
            Model::validateArray($this->category);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            if (\is_array($this->category)) {
                $res['Category'] = [];
                $n1              = 0;
                foreach ($this->category as $item1) {
                    $res['Category'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            if (!empty($map['Category'])) {
                $model->category = [];
                $n1              = 0;
                foreach ($map['Category'] as $item1) {
                    $model->category[$n1++] = category::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
