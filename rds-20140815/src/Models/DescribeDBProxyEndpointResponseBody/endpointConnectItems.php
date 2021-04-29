<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class endpointConnectItems extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems\endpointConnectItems[]
     */
    public $endpointConnectItems;
    protected $_name = [
        'endpointConnectItems' => 'EndpointConnectItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointConnectItems) {
            $res['EndpointConnectItems'] = [];
            if (null !== $this->endpointConnectItems && \is_array($this->endpointConnectItems)) {
                $n = 0;
                foreach ($this->endpointConnectItems as $item) {
                    $res['EndpointConnectItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConnectItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointConnectItems'])) {
            if (!empty($map['EndpointConnectItems'])) {
                $model->endpointConnectItems = [];
                $n                           = 0;
                foreach ($map['EndpointConnectItems'] as $item) {
                    $model->endpointConnectItems[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems\endpointConnectItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
