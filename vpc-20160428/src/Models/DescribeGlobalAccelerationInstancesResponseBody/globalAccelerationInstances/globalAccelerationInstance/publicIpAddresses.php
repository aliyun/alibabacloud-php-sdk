<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\publicIpAddresses\publicIpAddress;

class publicIpAddresses extends Model
{
    /**
     * @var publicIpAddress[]
     */
    public $publicIpAddress;
    protected $_name = [
        'publicIpAddress' => 'PublicIpAddress',
    ];

    public function validate()
    {
        if (\is_array($this->publicIpAddress)) {
            Model::validateArray($this->publicIpAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicIpAddress) {
            if (\is_array($this->publicIpAddress)) {
                $res['PublicIpAddress'] = [];
                $n1 = 0;
                foreach ($this->publicIpAddress as $item1) {
                    $res['PublicIpAddress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PublicIpAddress'])) {
            if (!empty($map['PublicIpAddress'])) {
                $model->publicIpAddress = [];
                $n1 = 0;
                foreach ($map['PublicIpAddress'] as $item1) {
                    $model->publicIpAddress[$n1] = publicIpAddress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
