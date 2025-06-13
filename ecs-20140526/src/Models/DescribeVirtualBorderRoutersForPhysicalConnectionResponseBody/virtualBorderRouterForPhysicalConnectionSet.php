<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet\virtualBorderRouterForPhysicalConnectionType;

class virtualBorderRouterForPhysicalConnectionSet extends Model
{
    /**
     * @var virtualBorderRouterForPhysicalConnectionType[]
     */
    public $virtualBorderRouterForPhysicalConnectionType;
    protected $_name = [
        'virtualBorderRouterForPhysicalConnectionType' => 'VirtualBorderRouterForPhysicalConnectionType',
    ];

    public function validate()
    {
        if (\is_array($this->virtualBorderRouterForPhysicalConnectionType)) {
            Model::validateArray($this->virtualBorderRouterForPhysicalConnectionType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->virtualBorderRouterForPhysicalConnectionType) {
            if (\is_array($this->virtualBorderRouterForPhysicalConnectionType)) {
                $res['VirtualBorderRouterForPhysicalConnectionType'] = [];
                $n1 = 0;
                foreach ($this->virtualBorderRouterForPhysicalConnectionType as $item1) {
                    $res['VirtualBorderRouterForPhysicalConnectionType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VirtualBorderRouterForPhysicalConnectionType'])) {
            if (!empty($map['VirtualBorderRouterForPhysicalConnectionType'])) {
                $model->virtualBorderRouterForPhysicalConnectionType = [];
                $n1 = 0;
                foreach ($map['VirtualBorderRouterForPhysicalConnectionType'] as $item1) {
                    $model->virtualBorderRouterForPhysicalConnectionType[$n1] = virtualBorderRouterForPhysicalConnectionType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
