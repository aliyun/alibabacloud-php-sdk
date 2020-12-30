<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet\routerInterfaceType;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routerInterfaceType) {
            $res['RouterInterfaceType'] = [];
            if (null !== $this->routerInterfaceType && \is_array($this->routerInterfaceType)) {
                $n = 0;
                foreach ($this->routerInterfaceType as $item) {
                    $res['RouterInterfaceType'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routerInterfaceSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouterInterfaceType'])) {
            if (!empty($map['RouterInterfaceType'])) {
                $model->routerInterfaceType = [];
                $n                          = 0;
                foreach ($map['RouterInterfaceType'] as $item) {
                    $model->routerInterfaceType[$n++] = null !== $item ? routerInterfaceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
