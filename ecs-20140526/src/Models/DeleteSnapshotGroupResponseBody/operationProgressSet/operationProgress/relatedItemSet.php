<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponseBody\operationProgressSet\operationProgress;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteSnapshotGroupResponseBody\operationProgressSet\operationProgress\relatedItemSet\relatedItem;

class relatedItemSet extends Model
{
    /**
     * @var relatedItem[]
     */
    public $relatedItem;
    protected $_name = [
        'relatedItem' => 'RelatedItem',
    ];

    public function validate()
    {
        if (\is_array($this->relatedItem)) {
            Model::validateArray($this->relatedItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->relatedItem) {
            if (\is_array($this->relatedItem)) {
                $res['RelatedItem'] = [];
                $n1 = 0;
                foreach ($this->relatedItem as $item1) {
                    $res['RelatedItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RelatedItem'])) {
            if (!empty($map['RelatedItem'])) {
                $model->relatedItem = [];
                $n1 = 0;
                foreach ($map['RelatedItem'] as $item1) {
                    $model->relatedItem[$n1] = relatedItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
