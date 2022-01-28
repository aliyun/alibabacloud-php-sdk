<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\privateIpAddresses\privateIpAddress;
use AlibabaCloud\Tea\Model;

class privateIpAddresses extends Model
{
    /**
     * @var privateIpAddress[]
     */
    public $privateIpAddress;
    protected $_name = [
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = [];
            if (null !== $this->privateIpAddress && \is_array($this->privateIpAddress)) {
                $n = 0;
                foreach ($this->privateIpAddress as $item) {
                    $res['PrivateIpAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateIpAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n                       = 0;
                foreach ($map['PrivateIpAddress'] as $item) {
                    $model->privateIpAddress[$n++] = null !== $item ? privateIpAddress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
