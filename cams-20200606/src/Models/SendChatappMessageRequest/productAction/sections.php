<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMessageRequest\productAction\sections\productItems;

class sections extends Model
{
    /**
     * @var productItems[]
     */
    public $productItems;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'productItems' => 'ProductItems',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->productItems)) {
            Model::validateArray($this->productItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productItems) {
            if (\is_array($this->productItems)) {
                $res['ProductItems'] = [];
                $n1 = 0;
                foreach ($this->productItems as $item1) {
                    $res['ProductItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ProductItems'])) {
            if (!empty($map['ProductItems'])) {
                $model->productItems = [];
                $n1 = 0;
                foreach ($map['ProductItems'] as $item1) {
                    $model->productItems[$n1++] = productItems::fromMap($item1);
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
