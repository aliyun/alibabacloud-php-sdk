<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\endpointConnectItems\endpointConnectItems;

class endpointConnectItems extends Model
{
    /**
     * @var endpointConnectItems[]
     */
    public $endpointConnectItems;
    protected $_name = [
        'endpointConnectItems' => 'EndpointConnectItems',
    ];

    public function validate()
    {
        if (\is_array($this->endpointConnectItems)) {
            Model::validateArray($this->endpointConnectItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointConnectItems) {
            if (\is_array($this->endpointConnectItems)) {
                $res['EndpointConnectItems'] = [];
                $n1 = 0;
                foreach ($this->endpointConnectItems as $item1) {
                    $res['EndpointConnectItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EndpointConnectItems'])) {
            if (!empty($map['EndpointConnectItems'])) {
                $model->endpointConnectItems = [];
                $n1 = 0;
                foreach ($map['EndpointConnectItems'] as $item1) {
                    $model->endpointConnectItems[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
