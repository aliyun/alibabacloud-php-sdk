<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $complete;
    /**
     * @var mixed[][]
     */
    public $items;
    protected $_name = [
        'complete' => 'Complete',
        'items'    => 'Items',
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
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1           = 0;
                foreach ($this->items as $item1) {
                    if (\is_array($item1)) {
                        $res['Items'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Items'][$n1++][$key2] = $value2;
                        }
                    }
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
        if (isset($map['Complete'])) {
            $model->complete = $map['Complete'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1           = 0;
                foreach ($map['Items'] as $item1) {
                    if (!empty($item1)) {
                        $model->items[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->items[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
