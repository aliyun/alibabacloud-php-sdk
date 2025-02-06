<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\SearchFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LinkFace\V20180720\Models\SearchFaceResponseBody\data\topUserItem;

class data extends Model
{
    /**
     * @var topUserItem[]
     */
    public $topUserItem;
    protected $_name = [
        'topUserItem' => 'TopUserItem',
    ];

    public function validate()
    {
        if (\is_array($this->topUserItem)) {
            Model::validateArray($this->topUserItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->topUserItem) {
            if (\is_array($this->topUserItem)) {
                $res['TopUserItem'] = [];
                $n1                 = 0;
                foreach ($this->topUserItem as $item1) {
                    $res['TopUserItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TopUserItem'])) {
            if (!empty($map['TopUserItem'])) {
                $model->topUserItem = [];
                $n1                 = 0;
                foreach ($map['TopUserItem'] as $item1) {
                    $model->topUserItem[$n1++] = topUserItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
