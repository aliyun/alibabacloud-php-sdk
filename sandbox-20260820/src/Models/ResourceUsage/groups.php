<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\ResourceUsage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\ResourceUsage\groups\items;

class groups extends Model
{
    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'dimensions' => 'dimensions',
        'items' => 'items',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['dimensions'] = [];
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['dimensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['dimensions'])) {
            if (!empty($map['dimensions'])) {
                $model->dimensions = [];
                foreach ($map['dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
