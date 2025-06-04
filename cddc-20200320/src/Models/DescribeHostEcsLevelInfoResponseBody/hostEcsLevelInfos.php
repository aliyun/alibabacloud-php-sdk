<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostEcsLevelInfoResponseBody\hostEcsLevelInfos\items;

class hostEcsLevelInfos extends Model
{
    /**
     * @var string
     */
    public $cddcHostType;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'cddcHostType' => 'CddcHostType',
        'items' => 'Items',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cddcHostType) {
            $res['CddcHostType'] = $this->cddcHostType;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CddcHostType'])) {
            $model->cddcHostType = $map['CddcHostType'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
