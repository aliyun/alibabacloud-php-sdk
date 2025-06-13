<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet\virtualBorderRouterType;

class virtualBorderRouterSet extends Model
{
    /**
     * @var virtualBorderRouterType[]
     */
    public $virtualBorderRouterType;
    protected $_name = [
        'virtualBorderRouterType' => 'VirtualBorderRouterType',
    ];

    public function validate()
    {
        if (\is_array($this->virtualBorderRouterType)) {
            Model::validateArray($this->virtualBorderRouterType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->virtualBorderRouterType) {
            if (\is_array($this->virtualBorderRouterType)) {
                $res['VirtualBorderRouterType'] = [];
                $n1 = 0;
                foreach ($this->virtualBorderRouterType as $item1) {
                    $res['VirtualBorderRouterType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VirtualBorderRouterType'])) {
            if (!empty($map['VirtualBorderRouterType'])) {
                $model->virtualBorderRouterType = [];
                $n1 = 0;
                foreach ($map['VirtualBorderRouterType'] as $item1) {
                    $model->virtualBorderRouterType[$n1] = virtualBorderRouterType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
