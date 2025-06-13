<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\detectionOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\detectionOptions\items\item;

class items extends Model
{
    /**
     * @var item[]
     */
    public $item;
    protected $_name = [
        'item' => 'Item',
    ];

    public function validate()
    {
        if (\is_array($this->item)) {
            Model::validateArray($this->item);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            if (\is_array($this->item)) {
                $res['Item'] = [];
                $n1 = 0;
                foreach ($this->item as $item1) {
                    $res['Item'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Item'])) {
            if (!empty($map['Item'])) {
                $model->item = [];
                $n1 = 0;
                foreach ($map['Item'] as $item1) {
                    $model->item[$n1] = item::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
