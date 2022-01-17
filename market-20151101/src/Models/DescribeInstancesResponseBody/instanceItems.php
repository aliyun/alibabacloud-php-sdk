<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponseBody\instanceItems\instanceItem;
use AlibabaCloud\Tea\Model;

class instanceItems extends Model
{
    /**
     * @var instanceItem[]
     */
    public $instanceItem;
    protected $_name = [
        'instanceItem' => 'InstanceItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceItem) {
            $res['InstanceItem'] = [];
            if (null !== $this->instanceItem && \is_array($this->instanceItem)) {
                $n = 0;
                foreach ($this->instanceItem as $item) {
                    $res['InstanceItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceItem'])) {
            if (!empty($map['InstanceItem'])) {
                $model->instanceItem = [];
                $n                   = 0;
                foreach ($map['InstanceItem'] as $item) {
                    $model->instanceItem[$n++] = null !== $item ? instanceItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
