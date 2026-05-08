<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AddContextsRequest\items;

class AddContextsRequest extends Model
{
    /**
     * @var string
     */
    public $contextType;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $memoryType;
    protected $_name = [
        'contextType' => 'contextType',
        'items' => 'items',
        'memoryType' => 'memoryType',
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
        if (null !== $this->contextType) {
            $res['contextType'] = $this->contextType;
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

        if (null !== $this->memoryType) {
            $res['memoryType'] = $this->memoryType;
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
        if (isset($map['contextType'])) {
            $model->contextType = $map['contextType'];
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

        if (isset($map['memoryType'])) {
            $model->memoryType = $map['memoryType'];
        }

        return $model;
    }
}
