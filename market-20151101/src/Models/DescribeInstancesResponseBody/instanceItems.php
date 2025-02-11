<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstancesResponseBody\instanceItems\instanceItem;

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
        if (\is_array($this->instanceItem)) {
            Model::validateArray($this->instanceItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceItem) {
            if (\is_array($this->instanceItem)) {
                $res['InstanceItem'] = [];
                $n1                  = 0;
                foreach ($this->instanceItem as $item1) {
                    $res['InstanceItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceItem'])) {
            if (!empty($map['InstanceItem'])) {
                $model->instanceItem = [];
                $n1                  = 0;
                foreach ($map['InstanceItem'] as $item1) {
                    $model->instanceItem[$n1++] = instanceItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
