<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses\networkAddress;

class networkAddresses extends Model
{
    /**
     * @var networkAddress[]
     */
    public $networkAddress;
    protected $_name = [
        'networkAddress' => 'NetworkAddress',
    ];

    public function validate()
    {
        if (\is_array($this->networkAddress)) {
            Model::validateArray($this->networkAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkAddress) {
            if (\is_array($this->networkAddress)) {
                $res['NetworkAddress'] = [];
                $n1 = 0;
                foreach ($this->networkAddress as $item1) {
                    $res['NetworkAddress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkAddress'])) {
            if (!empty($map['NetworkAddress'])) {
                $model->networkAddress = [];
                $n1 = 0;
                foreach ($map['NetworkAddress'] as $item1) {
                    $model->networkAddress[$n1++] = networkAddress::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
