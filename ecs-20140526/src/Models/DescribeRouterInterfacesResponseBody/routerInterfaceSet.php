<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet\routerInterfaceType;

class routerInterfaceSet extends Model
{
    /**
     * @var routerInterfaceType[]
     */
    public $routerInterfaceType;
    protected $_name = [
        'routerInterfaceType' => 'RouterInterfaceType',
    ];

    public function validate()
    {
        if (\is_array($this->routerInterfaceType)) {
            Model::validateArray($this->routerInterfaceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routerInterfaceType) {
            if (\is_array($this->routerInterfaceType)) {
                $res['RouterInterfaceType'] = [];
                $n1 = 0;
                foreach ($this->routerInterfaceType as $item1) {
                    $res['RouterInterfaceType'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RouterInterfaceType'])) {
            if (!empty($map['RouterInterfaceType'])) {
                $model->routerInterfaceType = [];
                $n1 = 0;
                foreach ($map['RouterInterfaceType'] as $item1) {
                    $model->routerInterfaceType[$n1++] = routerInterfaceType::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
