<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\productAction;

use AlibabaCloud\SDK\Cams\V20200606\Models\SendChatappMassMessageRequest\senderList\productAction\sections\productItems;
use AlibabaCloud\Tea\Model;

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
        'title'        => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productItems) {
            $res['ProductItems'] = [];
            if (null !== $this->productItems && \is_array($this->productItems)) {
                $n = 0;
                foreach ($this->productItems as $item) {
                    $res['ProductItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductItems'])) {
            if (!empty($map['ProductItems'])) {
                $model->productItems = [];
                $n                   = 0;
                foreach ($map['ProductItems'] as $item) {
                    $model->productItems[$n++] = null !== $item ? productItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
