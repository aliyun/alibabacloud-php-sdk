<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\privateIpAddresses\privateIpAddress;

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
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateIpAddress) {
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1 = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n1 = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1] = privateIpAddress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
