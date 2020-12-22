<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\componentGroups\items;
use AlibabaCloud\Tea\Model;

class componentGroups extends Model
{
    /**
     * @description 组件组名称。
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 组件列表
     *
     * @var items[]
     */
    public $items;
    protected $_name = [
        'groupName' => 'group_name',
        'items'     => 'items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
