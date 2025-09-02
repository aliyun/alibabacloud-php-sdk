<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6GatewaysResponseBody\ipv6Gateways\ipv6Gateway;

class ipv6Gateways extends Model
{
    /**
     * @var ipv6Gateway[]
     */
    public $ipv6Gateway;
    protected $_name = [
        'ipv6Gateway' => 'Ipv6Gateway',
    ];

    public function validate()
    {
        if (\is_array($this->ipv6Gateway)) {
            Model::validateArray($this->ipv6Gateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6Gateway) {
            if (\is_array($this->ipv6Gateway)) {
                $res['Ipv6Gateway'] = [];
                $n1 = 0;
                foreach ($this->ipv6Gateway as $item1) {
                    $res['Ipv6Gateway'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6Gateway'])) {
            if (!empty($map['Ipv6Gateway'])) {
                $model->ipv6Gateway = [];
                $n1 = 0;
                foreach ($map['Ipv6Gateway'] as $item1) {
                    $model->ipv6Gateway[$n1] = ipv6Gateway::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
