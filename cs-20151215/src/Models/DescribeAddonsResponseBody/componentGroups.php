<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups\items;

class componentGroups extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var items[]
     */
    public $items;
    protected $_name = [
        'groupName' => 'group_name',
        'items' => 'items',
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
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
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
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
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
