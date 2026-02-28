<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductTagsResponseBody\invalidProductTags\productTag;

class invalidProductTags extends Model
{
    /**
     * @var productTag[]
     */
    public $productTag;
    protected $_name = [
        'productTag' => 'ProductTag',
    ];

    public function validate()
    {
        if (\is_array($this->productTag)) {
            Model::validateArray($this->productTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productTag) {
            if (\is_array($this->productTag)) {
                $res['ProductTag'] = [];
                $n1 = 0;
                foreach ($this->productTag as $item1) {
                    $res['ProductTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductTag'])) {
            if (!empty($map['ProductTag'])) {
                $model->productTag = [];
                $n1 = 0;
                foreach ($map['ProductTag'] as $item1) {
                    $model->productTag[$n1] = productTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
