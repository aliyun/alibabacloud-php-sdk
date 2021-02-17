<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses\networkAddress;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAddress) {
            $res['NetworkAddress'] = [];
            if (null !== $this->networkAddress && \is_array($this->networkAddress)) {
                $n = 0;
                foreach ($this->networkAddress as $item) {
                    $res['NetworkAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAddress'])) {
            if (!empty($map['NetworkAddress'])) {
                $model->networkAddress = [];
                $n                     = 0;
                foreach ($map['NetworkAddress'] as $item) {
                    $model->networkAddress[$n++] = null !== $item ? networkAddress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
